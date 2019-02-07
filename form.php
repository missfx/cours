<form name="contactform" method="post" action="traitement.php">
    <h1>titre formulaire</h1>
<table width="450px">
<tr>
 <td valign="top">
  <label for="prenom">Prénom *</label>
 </td>
 <td valign="top">
  <input type="text" name="prenom" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="nom">Nom *</label>
 </td>
 <td valign="top">
  <input type="text" name="nom" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email *</label>
 </td>
 <td valign="top">
  <input type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="commentaires">Commentaires *</label>
 </td>
 <td valign="top">
  <textarea name="commentaires" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://form.velvetcocoon.com/traitement.php">Envoyer</a>
 </td>
</tr>
</table>
</form>