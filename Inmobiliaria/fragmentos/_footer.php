  </main>
      <footer>
        <ul class="pie">    
          <li><p><a href="">Aviso Legal</a> | <a href="">Política de cookies</a> | <a href="">Política de privacidad</a></p></li>
          <li><p>&copy Copywright <?php echo date('Y')?></p><li>
        </ul>  
      </footer>
  </body>
</html>

<?
//Cerrar conexión
if($conexionabierta){
  $conn->close();
}

?>

