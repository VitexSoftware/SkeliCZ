<?php
/**
 * SkeliCZ - Title page
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';

$process = false;

$firstname = $oPage->getRequestValue('firstname');
$lastname = $oPage->getRequestValue('lastname');

if ($oPage->isPosted()) {
    $process = true;

    $emailAddress = addslashes(strtolower($_POST['email_address']));

    $login = addslashes($_POST['login']);
    if (isset($_POST['password'])) {
        $password = addslashes($_POST['password']);
    }
    if (isset($_POST['confirmation'])) {
        $confirmation = addslashes($_POST['confirmation']);
    }

    $error = false;

    if (strlen($emailAddress) < 5) {
        $error = true;
        $oUser->addStatusMessage(_('Mail address is short'), 'warning');
    } else {
        if (!$oUser->IsEmail($emailAddress, true)) {
            // $error = true;
            $oUser->addStatusMessage(_('wrong mail addres'), 'warning');
        } else {
            $testuser = new \Ease\User;
            $testuser->setmyKeyColumn('email');
            $testuser->loadFromSQL($oPage->EaseAddSlashes($emailAddress));
            if ($testuser->getUserName()) {
                $error = true;
                $oUser->addStatusMessage(sprintf(_('Mail address %s is already registered'), $emailAddress), 'warning');
            }
            unset($testuser);
        }
    }

    if (strlen($password) < 5) {
        $error = true;
        $oUser->addStatusMessage(_('Password is short'), 'warning');
    } elseif ($password != $confirmation) {
        $error = true;
        $oUser->addStatusMessage(_('Password control not match'), 'warning');
    }

    $testuser = new \Ease\User;
    $testuser->setmyKeyColumn('login');
    $testuser->loadFromSQL($oPage->EaseAddSlashes($login));
    $testuser->resetObjectIdentity();

    if ($testuser->getMyKey()) {
        $error = true;
        $oUser->addStatusMessage(sprintf(_('Username %s is already taken. Please use another.'), $login), 'warning');
    }

    if ($error == false) {
        $newOUser = new User();
        $newOUser->setData(
                array(
                    'email' => $emailAddress,
//                    'parent' => (int) $customerParent,
                    'login' => $login,
                    $newOUser->passwordColumn => $newOUser->encryptPassword($password),
                    'firstname' => $firstname,
                    'lastname' => $lastname
                )
        );

        $userID = $newOUser->insertToSQL();

        if (!is_null($userID)) {
            $newOUser->setMyKey($userID);
            if ($userID == 1) {
                $newOUser->setSettingValue('admin', TRUE);
                $oUser->addStatusMessage(_('Administrator\'s account created'), 'success');
                $newOUser->saveToSQL();
            } else {
                $oUser->addStatusMessage(_('User account created'), 'success');
            }

            $newOUser->loginSuccess();

            $email = $oPage->addItem(new \Ease\Mailer($newOUser->getDataValue('email'), _('New account confirmation')));
            $email->setMailHeaders(array('From' => EMAIL_FROM));
            $email->addItem(new \Ease\Html\Div("Account created:\n"));
            $email->addItem(new \Ease\Html\Div(' Login: ' . $newOUser->GetUserLogin() . "\n"));
            $email->addItem(new \Ease\Html\Div(' Heslo: ' . $_POST['password'] . "\n"));
            $email->send();

            $email = $oPage->addItem(new \Ease\Mailer(SEND_INFO_TO, sprintf(_('New sign on %s'), $newOUser->GetUserLogin())));
            $email->setMailHeaders(array('From' => EMAIL_FROM));
            $email->addItem(new \Ease\Html\Div(_("New user account:\n")));
            $email->addItem(new \Ease\Html\Div(' Login: ' . $newOUser->GetUserLogin() . "\n"));
            $email->send();

            \Ease\Shared::user($newOUser)->loginSuccess();

            $oPage->redirect('index.php');
            exit;
        } else {
            $oUser->addStatusMessage(_('New account was not created'), 'error');
            $email = $oPage->addItem(new \Ease\Mail(constant('SEND_ORDERS_TO'), 'New account was not created'));
            $email->addItem(new \Ease\Html\DivTag('Account', $oPage->printPre($newOUser->getData())));
            $email->send();
        }
    }
}

$oPage->addItem(new PageTop(_('Sign up')));

$regFace = $oPage->container->addItem(new \Ease\TWB\Panel(_('Sign up')));

$regForm = $regFace->addItem(new ColumnsForm(new \Ease\User));
if ($oUser->getUserID()) {
    $regForm->addItem(new \Ease\Html\InputHiddenTag('parent', $oUser->GetUserID()));
}

$regForm->addInput(new \Ease\Html\InputTextTag('firstname', $firstname), _('Jméno'));
$regForm->addInput(new \Ease\Html\InputTextTag('lastname', $lastname), _('Příjmení'));

$regForm->addInput(new \Ease\Html\InputTextTag('login'), _('přihlašovací jméno') . ' *');
$regForm->addInput(new \Ease\Html\InputPasswordTag('password'), _('heslo') . ' *');
$regForm->addInput(new \Ease\Html\InputPasswordTag('confirmation'), _('potvrzení hesla') . ' *');
$regForm->addInput(new \Ease\Html\InputTextTag('email_address'), _('emailová adresa') . ' *');

$regForm->addItem(new \Ease\Html\Div(new \Ease\Html\InputSubmitTag('Register', _('Registrovat'), array('title' => _('dokončit registraci'), 'class' => 'btn btn-success'))));

if (isset($_POST)) {
    $regForm->fillUp($_POST);
}

$oPage->addItem(new PageBottom());
$oPage->draw();
