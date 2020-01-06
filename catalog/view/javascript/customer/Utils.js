/**
 * Obtem os dados do cliente
 * https://www.receitaws.com.br
 * @param number cnpj
 */
function getCustomerData(cnpj) {
  return $.ajax({
    url: "https://www.receitaws.com.br/v1/cnpj/" + cnpj,
    type: "get",
    dataType: "jsonp",
    async: false
  });
}

function eraseCustomerData() {}
