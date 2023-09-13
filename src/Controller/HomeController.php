<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path: ['/', '/home'], name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            "content" => [
                "Geração de Boletos" => "O aplicativo pode permitir aos usuários gerar boletos bancários preenchendo os campos relevantes, como data de vencimento, valor do documento, número do documento, etc.",
                "Personalização de Boletos" => "Os usuários podem personalizar os boletos com informações específicas, como o nome do cedente, sacado, endereço, e outras informações personalizadas.",
                "Cálculo Automático" => "O aplicativo pode realizar cálculos automáticos, como juros, multa, desconto e outros valores com base nas informações inseridas.",
                "Visualização de Boletos" => "Os usuários podem visualizar uma prévia do boleto gerado antes de confirmar e emitir o documento final.",
                "Código de Barras" => "O aplicativo pode gerar automaticamente o código de barras com base nas informações do boleto para facilitar o pagamento em bancos ou casas lotéricas.",
                "Armazenamento de Dados" => "Os boletos gerados e informações relevantes podem ser armazenados no aplicativo para referência futura.",
                "Autenticação Mecânica" => "O aplicativo pode incluir uma funcionalidade de autenticação mecânica para garantir a integridade do boleto.",
                "Exportação" => "Os usuários podem exportar os boletos gerados em diferentes formatos, como PDF, para facilitar o compartilhamento e o envio por e-mail.",
                "Integração Bancária" => "O aplicativo pode se integrar a sistemas bancários para efetuar o pagamento automaticamente, dependendo da infraestrutura disponível.",
                "Interface de Usuário Amigável" => "O aplicativo tem uma interface de usuário amigável que permita aos usuários preencher os campos e gerar boletos com facilidade.",
                "Validação de Dados" => "Validação de dados para garantir que as informações inseridas sejam corretas e estejam de acordo com os padrões bancários.",
                "Segurança" => "O aplicativo é seguro, especialmente quando se trata de informações financeiras e pessoais."
            ]
        ]
    );
    }
}
