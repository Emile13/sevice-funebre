<!DOCTYPE html>
<html lang="fr">
<?php include('modeles/linkheader.php'); ?>
<body>
<?php include('modeles/header.php');?>
<section style="background-color:#FEF1EA;z-index: 0;border-radius: 0px 0px 200px 200px;">
    <div class="container" style="padding-top:150px; padding-bottom: 100px;">
         <div class="row" style="">
             <div class="col-md-5" style="transform: 50% 50%;">
                <h1 style="color:#0F7778;font-size: 35pt;">
                    Titre pour<br>Attirer les gens
                </h1><br>
                <p style="text-align:justify;">
                    Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
                </p><br>
                <button class="btn btn-success" style="background-color: #0F7778;border: #0F7778;border-radius: 15px;" type="submit">Demander un devis</button>
             </div>
             <div class="col-md-7" style="text-align:center;">
                 <img src="images/fond1.png" style="width:85%;">
             </div>
         </div>
    </div>
</section>
<?php 
include('public/nos-servis.php');
include('public/tarifs.php');
include('public/avis.php');
include('modeles/footer.php');
?>
</body>
</html>