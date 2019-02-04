const contatos = document.getElementById('contatos');
const endereco = document.getElementById('endereco');

if (contatos) {

	contatos.addEventListener('click', e => {
		if (e.target.className === 'btn btn-danger delete-contato') {

			if (confirm('Deseja realmente excluir o contato?')) {
				const id = e.target.getAttribute('data-id');

				fetch(`/contato/delete/${id}`, {
					method: 'DELETE'
				}).then(res => window.location.reload());
			}
		}		
	});
} 

if (endereco) {

	endereco.addEventListener('click', e => {
		if (e.target.className === 'btn btn-danger delete-endereco') {

			if (confirm('Deseja realmente excluir o endereço?')) {
				const id = e.target.getAttribute('data-id');

				fetch(`/endereco/delete/${id}`, {
					method: 'DELETE'
				}).then(res => window.location.reload());
			}
		}		
	});
} 