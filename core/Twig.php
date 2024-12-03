<?php 
    namespace core;

    use Dzango\Twig\Extension\Truncate;

    class Twig {
        private $twig;
        private $functions = [];

        public function loadTwig() {
            $this->twig = new \Twig\Environment($this->loadViews(), [
                'debug' => true,
                // 'cache' => '/cache',
                'auto_reload' => true,
            ]);

            return $this->twig;
        }

        private function loadViews() {
            return new \Twig\Loader\FilesystemLoader('../app/views');
        }

        public function loadExtensions() {
            return $this->twig->addExtension(new \Truncate());
            // instalei o dzango/twig-truncate-extension e o dzango/twig-truncate-bundle - adicionando as versões ao composer.json, mas não tem dado certo, não criou pasta alguma mesmo quando não adicionei as versões no composer.
            // esse truncate é para substituir o Twig_Extensions_Extension_Text(), do twig/extensions que foi depreciado.
        }
    }
?>