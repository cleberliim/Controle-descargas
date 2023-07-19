$(document).ready(function () {
  $("#buscar").click(function () {
    var valor = $("#valor").val();
    $.ajax({
      type: "POST",
      url: "buscar_dados.php",
      data: { valor: valor },
      dataType: "json",
      success: function (data) {
        $("#motorista").val(data.motorista);
        $("#cte").val(data.cte);
      },
    });
  });
});
