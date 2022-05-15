const deletar = (id)=>{
    const messageDelete = document.querySelector('#msg-delete');
    console.log(messageDelete);
    messageDelete.textContent = `ID: ${id} - Tem certeza que deseja excluir esse registo?`;

    const buttonDelete = document.querySelector('#button-delete');
    const linkDelete = document.querySelector('#link-delete');
    const conteudo = `<a href="../dataBase/delete.php?id= ${id}" class="link-light">Delete</a>`;

    linkDelete.innerHTML = conteudo;

    buttonDelete.appendChild(linkDelete);

    console.log(id);
    
}


const editar = (...args) =>{
    console.log(...args);
}