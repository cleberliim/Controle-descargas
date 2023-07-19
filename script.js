$(document).ready(function () {
  $("#buscar").click(function () {
    var valor = $("#valor").val();
    $.ajax({
      type: "POST",
      url: "buscar_dados.php",
      data: { valor: valor },
      dataType: "json",
      success: function (data) {
        $("#campo1").val(data.campo1);
        $("#campo2").val(data.campo2);
      },
    });
  });
});
