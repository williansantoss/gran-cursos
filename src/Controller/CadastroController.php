<?php 
	namespace 	App\Controller;

	use App\Entity\Contatos;
	use App\Entity\Endereco;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Request;

	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;

	class CadastroController extends Controller {

		/**
		* @Route("/", name="lista_contatos")
		* @Method({"GET"})
		*/
		public function index() {

			$contatos = $this->getDoctrine()->getRepository(Contatos::class)->findAll();

			return $this->render('cadastro/index.html.twig', array('contatos'=> $contatos));
		}
		

		/**
		* @Route("/contato/novo", name="contato_novo")
		* Method({"GET", "POST"})
		*/
		public function novo(Request $request) {

			$contato = new Contatos();

			$form = $this->createFormBuilder($contato)
			->add('nome', TextType::class, array (
				'attr' => array ('class' => 'form-control')))
			->add('email', TextType::class, array(
				'attr' => array('class' => 'form-control')))
			->add('telefone', TextType::class, array (
				'required'=> false, 'attr'=> array('class' => 'form-control')))
			->add('Salvar', SubmitType::class, array(
				'label' => 'Cadastrar',
				'attr' => array('class' => 'btn btn-primary mt-3')
			))
			->getForm();

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()) {

				$contato = $form->getData();

				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($contato);
				$entityManager->flush();

				return $this->redirectToRoute('lista_contatos');

			}
			return $this->render('cadastro/novo.html.twig', array(
				'form'=>$form->createView()));	

		}

		/**
		* @Route("/contato/editar/{id}", name="contato_editar")
		* Method({"GET", "POST"})
		*/
		public function editar(Request $request, $id) {

			$contato = new Contatos();
			$contato = $this->getDoctrine()->getRepository(Contatos::class)->find($id);
			
			$form = $this->createFormBuilder($contato)
			->add('nome', TextType::class, array (
				'attr' => array ('class' => 'form-control')))
			->add('email', TextType::class, array(
				'attr' => array('class' => 'form-control')))
			->add('telefone', TextType::class, array (
				'required'=> false, 'attr'=> array('class' => 'form-control')))
			->add('Salvar', SubmitType::class, array(
				'label' => 'Atualizar',
				'attr' => array('class' => 'btn btn-primary mt-3')
			))
			->getForm();

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()) {

				$entityManager = $this->getDoctrine()->getManager();				
				$entityManager->flush();

				return $this->redirectToRoute('lista_contatos');

			}
			return $this->render('cadastro/editar.html.twig', array(
				'form'=>$form->createView()));	

		}

		/**
		* @Route("/contato/{id}", name="contato_ver")
		*/
		public function ver($id) {

			$contato = $this->getDoctrine()->getRepository(Contatos::class)->find($id);

			$endereco = $this->getDoctrine()->getRepository(Endereco::class)->findOneBy(array('contato' => $id));
			

			return $this->render('cadastro/ver.html.twig', array('contato'=> $contato, 'endereco'=>$endereco));	

		}

		/**
		* @Route("/contato/delete/{id}")
		* @Method({"DELETE"}) 
		*/
		public function apagar(Request $request, $id) {

			$contato = $this->getDoctrine()->getRepository(Contatos::class)->find($id);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($contato);
			$entityManager->flush();

			$response = new Response();
			$response->send();	

		}		
		
	}