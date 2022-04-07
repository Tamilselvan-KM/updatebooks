<?php
    include_once 'includes/header.php';
?>
  <head>
          <link rel="stylesheet" href="./css/style.css">
  </head>
  <body style="background-color:orange">
      <?php
            include_once 'includes/adminNav.php';
      ?>
      <div class="container my-5">
        <h2 class="text-center">Add Content</h2>
      <form id="form1" action="/includes/contentInsert.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content textarea</label>
                <textarea name="contents" id="content" class="form-control" rows="5" required></textarea>
                <p class="fs-5" id="characters"> 0 /  5000 Characters</p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="date" required>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit" name="button">Add Content</button>
            </div>
      </form>
      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var content = document.getElementById('content');
        var characters = document.getElementById('characters');

        function countCharacters(eve){
            var text = eve.target.value;
            textLength = text.length;
            characters.innerHTML = `${textLength} / 5000 Characters`;
        }
        content.addEventListener("keyup", (e) => {
            // e.preventDefault();
            countCharacters(e);
        })
    </script>
    <?php
        include_once 'includes/footer.php';
    ?>
    <script src="./js/url.js"></script>

  </body>
</html>