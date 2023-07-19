

 <!--Datatables -->
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script src="https:////cdn.datatables.net/plug-ins/1.13.4/i18n/pt-PT.json"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

 <script>
     $(document).ready(function() {

         $('#example').DataTable({
             responsive: true,
             lengthMenu: [
                 [10, 14, 100, -1],
                 [10, 14, 100, 'All'],
             ],
             scrollX: true,
             language: {
                 url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-PT.json',
             },
             "order": [
                 [0, 'desc']
             ] // Ordenar pela primeira coluna em ordem decrescente
         });
     });
 </script>


 <script>
     window.addEventListener("load", function() {
         var preloader = document.getElementById("preloader");
         preloader.style.display = "none";
     });
 </script>




 </body>

 </html>