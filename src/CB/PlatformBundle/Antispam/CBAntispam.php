<?php
//src/CB/PlatformBundle/Antispam/CBAntispam.php
  namespace CB\PlatformBundle\Antispam;

  class CBAntispam{
    private $mailer;
    private $locale;
    private $minLength;

    public function __contruct(\Swift_Mailer $mailer, $locale, $minLength)
    {
      $this->mailer     = $mailer;
      $this->locale     = $locale;
      $this->minLength  = (int) $minLength;
    }
    // On va verifier si le texte est un spam ou non
    public function isSpam($text)
    {
      return strlen($text) < $this->minLength;
    }
  }

?>
