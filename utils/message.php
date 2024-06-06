<?php
require "db.php";

    $req = db_connect()->query('SELECT nom FROM contacts WHERE id='.$_GET['id'].'');
    $reqData = $req->fetch();
?>

<?php if(@$_GET['user'] == 'etudiant'); ?>

<div class="" style="width: 50%;height:55%; background: linear-gradient(#009FE3 25%,orange 75%); margin-top: 12% ;margin-left:25%;padding-top:25px;border-radius:40px">
    <div style="font-size: 25px; margin-left:25%; position:relative; bottom:5%">
        <table>
            <tr>
                <td style="font-size: 30px">Envoyer votre message à</td>
                <td>
                    <h4 style="color: blueviolet;"><i><?php echo $reqData['nom']; ?></i></h4>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-left: 0; padding: 10px 0px 0px 10px;">
        <form action="sendMessage.php" method="post">
            <textarea name="message" id="" cols="45" rows="15" style="margin-left: 25%; padding: 10px 10px 0px 10px; border-radius:30px; resize:none" placeholder="Ecrivez votre message"></textarea>
            <input type="hidden" name="user" value="etudiant">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input type="submit" value="Envoyer" style="margin-right: 70px; font-size: 18px; border-radius: 5px">
        </form>
    </div>
</div>

<?php elseif(@$_GET['user'] == 'prof'); ?>
<div class="" style="width: 50%;height:55%; background: linear-gradient(#009FE3 25%,orange 75%); margin-top: 12% ;margin-left:25%;padding-top:25px;border-radius:40px">
    <div style="font-size: 25px; margin-left:25%; position:relative; bottom:5%">
        <table>
            <tr>
                <td style="font-size: 30px">Envoyer votre message à</td>
                <td>
                    <h4 style="color: blueviolet;"><i><?php echo $reqData['nom']; ?></i></h4>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-left: 0; padding: 10px 0px 0px 10px;">
        <form action="sendMessage.php" method="post">
            <textarea name="message" id="" cols="45" rows="15" style="margin-left: 25%; padding: 10px 10px 0px 10px; border-radius:30px; resize:none" placeholder="Ecrivez votre message"></textarea>
            <input type="hidden" name="user" value="prof">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input type="submit" value="Envoyer" style="margin-right: 70px; font-size: 18px; border-radius: 5px">
        </form>
    </div>
</div>

<?php else; ?>
<div class="" style="width: 50%;height:55%; background: linear-gradient(#009FE3 25%,orange 75%); margin-top: 12% ;margin-left:25%;padding-top:25px;border-radius:40px">
    <div style="font-size: 25px; margin-left:25%; position:relative; bottom:5%">
        <table>
            <tr>
                <td style="font-size: 30px">Envoyer votre message à</td>
                <td>
                    <h4 style="color: blueviolet;"><i><?php echo $reqData['nom']; ?></i></h4>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin-left: 0; padding: 10px 0px 0px 10px;">
        <form action="sendMessage.php" method="post">
            <textarea name="message" id="" cols="45" rows="15" style="margin-left: 25%; padding: 10px 10px 0px 10px; border-radius:30px; resize:none" placeholder="Ecrivez votre message"></textarea>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input type="submit" value="Envoyer" style="margin-right: 70px; font-size: 18px; border-radius: 5px">
        </form>
    </div>
</div>

<?php endif; ?>