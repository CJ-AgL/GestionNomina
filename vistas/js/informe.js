/*=============================================
IMPRIMIR FACTURA
=============================================*/
$(".tablas").on("click", ".btnImprimirFactura", function(){

    var codigoVenta = $(this).attr("codigoVenta");

    window.open("extensiones/tcpdf/pdf/recibo.php?codigo="+codigoVenta, "_blank");

})
