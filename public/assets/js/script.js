document.addEventListener("DOMContentLoaded", function() {
  const buscarBtn = document.getElementById("buscarBtn");
  const cardsFiltradosContainer = document.getElementById("cardsFiltrados");
  const campo1 = document.getElementById("tipoImovelSelect");
  const campo2 = document.getElementById("bairroSelect");
  const campo3 = document.getElementById("numQuartosSelect");
  const mensagemCamposVazios = document.getElementById("mensagemCamposVazios");
  
    buscarBtn.addEventListener("click", function(event){
      // Evitar que o formulário seja enviado imediatamente
      event.preventDefault();
 
      const tipoImovelSelecionado = document.getElementById("tipoImovelSelect").value;
      const bairroSelecionado = document.getElementById("bairroSelect").value;
      const numQuartosSelecionado = document.getElementById("numQuartosSelect").value;

      if (tipoImovelSelecionado === "" || bairroSelecionado === "" || numQuartosSelecionado === "") {
      // Exibir a mensagem de campos vazios
      mensagemCamposVazios.style.display = "block";
      // Esconder outros elementos
      cardsFiltradosContainer.style.display = "none";
      document.getElementById("mensagemNenhumImovel").style.display = "none";
    } else {

      // Limpar os cards filtrados anteriores
      cardsFiltradosContainer.innerHTML = "";

    // Filtrar os cards de acordo com as opções selecionadas
    const cards = document.querySelectorAll(".card");
    cards.forEach(card => {
      const tipoImovelCard = card.querySelector(".tipo-imovel").getAttribute("data-tipo");
      const bairroCard = card.querySelector(".bairro").getAttribute("data-bairro");
      const numQuartosCard = card.querySelector(".num-quartos").getAttribute("data-quartos");
    
      if (
        (tipoImovelSelecionado === "ALLIMOVEIS" || tipoImovelSelecionado === tipoImovelCard) &&
        (bairroSelecionado === "ALLBAIRROS" || bairroSelecionado === bairroCard) &&
        (numQuartosSelecionado === "ALLQUARTOS" || numQuartosSelecionado === numQuartosCard)
      ) {
        // Clonar o card filtrado e adicioná-lo ao container
        const cardFiltrado = card.cloneNode(true);
        cardsFiltradosContainer.appendChild(cardFiltrado);
      }
        // Após filtrar os cards, verifique se há algum card filtrado
        if (cardsFiltradosContainer.children.length === 0) {
          // Exibir a mensagem de nenhum imóvel
          document.getElementById("mensagemNenhumImovel").style.display = "block";
        } else {
          // Esconder a mensagem de nenhum imóvel
          document.getElementById("mensagemNenhumImovel").style.display = "none";
        }

        // Exibir os cards filtrados e esconder a mensagem de campos vazios
        cardsFiltradosContainer.style.display = "block";
        document.getElementById("mensagemCamposVazios").style.display = "none";
      
      // Verificar se algum campo está vazio
      
      });
    };
  });
 });


