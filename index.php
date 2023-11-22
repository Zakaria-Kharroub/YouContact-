<?php
include 'connect.php';

$query = "SELECT * FROM Contact";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>
  
<?php include 'navbar.php'; ?>

  <!-- ------------------- -->
<main class='container'>


<h1 class='text-center mt-4'>Liste des Contacts</h1>
<!-- Button trigger modal -->
<div class="btn-ajout-modal" style="margin-top: 20px;display:flex;justify-content: center;">
 
  <button type="button" class="btn btn-success mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajouter contact
  </button>
</div>




    <table class="container table mt-5">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">Profil</th>
      <th scope="col">Name</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">Edit/Delete</th>
      
      
    </tr>
  </thead>
  <tbody>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            // echo "<td>" . $row['ContactID'] . "</td>";
            echo "<td><i class='fa-solid fa-user'></i></td>";
            echo "<td>" . $row['Nom'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Adresse'] . "</td>";
            echo "<td>
                  <button type='button' class='btn btn-primary'><i class='fa-solid fa-pen-to-square'></i></button>
                  <button type='button' class='btn btn-danger'><i class='fa-solid fa-trash'></i></button>
                  </td>";
                  echo "</tr>";
                }
                ?>
            </tbody>
</table>

<!-- <div class='mt-5'>
<button type="button" class="btn btn-success">Ajouter un contact</button>
</div> -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="insert.php" method="POST">
                    <div class="modal-body">
                        <!-- Formulaire pour ajouter un contact -->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="Nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="Adress" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</main>





<!-- start footer -->

<!--end footer  -->

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>



  <!-- <tr>
      <th scope="row">1</th>
      <td><i class="fa-solid fa-user"></i></td>
      <td>Ali</td>
      <td>0645231734</td>
      <td>ali@gmail.com</td>
      <td>youssoufia maroc</td>
      <td>
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
      </td>
      
    </tr> -->



