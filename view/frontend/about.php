 <?php $title = "A propos" ?>

 <?php ob_start(); ?>
 <div class="titre2">
   <div class="shadow-lg p-3 mb-5 bg-azure rounded">
     <h1>Billet simple pour l'Alaska</h1>
   </div>
 </div>

 <section class="shadow-lg p-3 mb-5 bg-white rounded">
   <div class="media">
     <img class="jeanPic" src="public/images/writer" class="align-self-start mr-3" alt="writer">
     <div class="media-body">
       <h5 class="mt-0">
         <div class="author"> Jean FORTEROCHE</div>
       </h5>
       <p>Né en 1954 à Antibes, il se prend de passion pour la littérature très jeune, consacrant tout son temps libre à
         dévorer des livres dans la bibliothèque municipale où travaille sa mère. C’est grâce à un concours de nouvelles
         proposé par son professeur de français qu’il découvre le bonheur de l’écriture. À compter de ce jour, et
         jusqu’à
         aujourd’hui, il ne cessera plus de noircir des carnets.</p>
       <p>
         Ses études, son long voyage aux États-Unis, ses rencontres, tout vient enrichir son imagination et ses projets
         de
         roman. Diplômé de sciences économiques, il devient professeur dans l’est puis le sud de la France.
         En 2001, il publie son premier roman,<strong><em>Terres arides</em></strong>, mais c’est le
         suivant,<strong><em>
             Ainsi va la vie…</em></strong> qui consacre sa rencontre
         avec
         le public. Cette histoire d’amour et de suspense soulignée de surnaturel lui vaut un succès fulgurant qui ne se
         démentira plus.
         Traduits en quarante langues, plusieurs fois adaptés au cinéma, tous ses livres connaissent un immense succès
         en
         France et dans le monde. Pour les lecteurs, chaque nouveau roman de Jean FORTEROCHE est désormais un événement
         et
         un rendez-vous.
       </p>
       <p>
         Cette fois il a décidé de surprendre ses lecteurs. Sa volonté d'innover l'amène à l'écriture 2.0. Il va pour ce
         dernier roman <strong><em>Billet simple pour l'Alaska</em></strong> le diffuser par épisodes depuis son site.
         Ainsi
         les lecteurs auront accès à son oeuvre tout comme ils
         ont la possibilité de visionner une série inédite sur leur service de streaming préféré.
       </p>
     </div>
   </div>
 </section>

 <section class="shadow-lg p-3 mb-5 bg-white rounded">
   <div class="media">

     <div class="media-body">
       <h5 class="mt-0 mb-1">
         <div class="author"> Jean FORTEROCHE et les loups</div>
       </h5>
       <p>Dans ce nouveau roman, on notera la fascination que Jean Forteroche porte à l'égard des loups, notamment ceux
         qu'il a pu longuement observer lors de son premier voyage en Alaska</p>
       <p>Sa rencontre avec ses animaux qui peuvent s'avérer aussi doux qu'éffrayants sont à l'origine de l'écriture de
         ce roman qui ne manque pas de rebondissements. Les fans de la première heure ne seront pas déçus.</p>
     </div>
     <img class="jeanPic" src="public/images/wolf2" class="ml-3" alt="loup">
   </div>
 </section>

 <?php $content = ob_get_clean(); ?>

 <?php require('template.php'); ?>