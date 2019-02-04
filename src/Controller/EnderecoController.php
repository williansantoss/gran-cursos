<?php 
	namespace 	App\Controller;
	
	use App\Entity\Endereco;
	use App\Entity\Contatos;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Request;

	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\CollectionType;
	use Doctrine\ORM\EntityRepository;
	use Symfony\Bridge\Doctrine\Form\Type\EntityType;
	

	class EnderecoController extends Controller {
		/**
		* @Route("/", name="lista_enderecos")
		* @Method({"GET"})
		*/
		public function index() {

			//vazio
		}
		
		/**
		* @Route("/endereco/novo/{id}", name="endereco_novo")
		* Method({"GET", "POST"})
		*/
		public function novo(Request $request, $id) {
			
			$endereco = new Endereco();	
			$contato = new Contatos();	
			$contato = $this->getDoctrine()->getRepository(Contatos::class)->find($id);		
			$endereco->setContato($contato);
			
			$form = $this->createFormBuilder($endereco)
			->add('quadra', TextType::class, array (
				'attr' => array ('class' => 'form-control')))
			->add('numero', TextType::class, array(
				'attr' => array('class' => 'form-control')))
			->add('observacao', TextareaType::class, array (
				'required'=> false, 'attr'=> array('class' => 'form-control')))	
			->add('Salvar', SubmitType::class, array(
				'label' => 'Cadastrar',
				'attr' => array('class' => 'btn btn-primary mt-3')
			))
			->getForm();

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()) {

				$endereco = $form->getData();

				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($endereco);
				$entityManager->flush();

				return $this->redirectToRoute('lista_contatos');

			}
			return $this->render('endereco/novo.html.twig', array(
				'form'=>$form->createView()));		

		}

		/**
		* @Route("/endereco/editar/{id}", name="endereco_editar")
		* Method({"GET", "POST"})
		*/
		public function editar(Request $request, $id) {

			$endereco = new Endereco();
			$endereco = $this->getDoctrine()->getRepository(Endereco::class)->find($id);
			
			$form = $this->createFormBuilder($endereco)
			->add('quadra', TextType::class, array (
				'attr' => array ('class' => 'form-control')))
			->add('numero', TextType::class, array(
				'attr' => array('class' => 'form-control')))
			->add('observacao', TextareaType::class, array (
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
			return $this->render('endereco/editar.html.twig', array(
				'form'=>$form->createView()));	

		}

		/**
		* @Route("/endereco/delete/{id}")
		* @Method({"DELETE"}) 
		*/
		public function apagar(Request $request, $id) {

			$endereco = $this->getDoctrine()->getRepository(Endereco::class)->find($id);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($endereco);
			$entityManager->flush();

			$response = new Response();
			$response->send();	

		}	
	}