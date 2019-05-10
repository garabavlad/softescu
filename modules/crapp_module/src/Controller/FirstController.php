    <?php

  namespace Drupal\crapp_module\Controller;
     
    use Drupal\Core\Controller\ControllerBase;
     
    class FirstController extends ControllerBase {
      public function content() {
        return array(
          '#type' => 'markup',
          '#markup' => t('Hello world'),
        );
      }
    }