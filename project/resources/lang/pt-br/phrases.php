<?php
/**
 * Pequenos trechos de texto, como por exemplo: "Pequena frase descritiva."
 */

return [
    'common' => [
        'name' => 'Digite o nome',
        'cpf' => 'Digite o CPF',
        'hello' => 'Olá,',
        'email' => 'Digite o email',
        'state' => 'Selecione um estado',
        'born_date' => '00/00/0000',
        'required_fields' => 'Os campos com ( * ) são obrigatórios.',
        'password_caracter' => '* Senha deve ter no mínimo 8 caracteres.'
    ],

    'user' => [
        'password' => 'Digite a senha',
        'password_confirmation' => 'Confirme a senha',
    ],

    'auth' => [
        'create_new_password' => 'Cadastrar nova senha',
        'reset_password' => 'Recuperar senha',
        'reset_password_info' => 'Informe seu email e enviaremos um e-mail com instruções para redefinir sua senha.',
        'back_to_login_page' => 'Retornar a página de login',
        'login' => 'Bem-vindo à plataforma',
        'register' => 'Criar Conta',
        'email' => 'Insira o endereço de e-mail...',
        'password' => 'Informe sua nova senha...',
        'password_confirmation' => 'Confirmar nova senha...',
        'password_save' => 'Salvar nova senha'
    ],

    'errors' => [
        'titles' => [
            'page-not-found' => 'Página não encontrada!',
            'access-forbidden' => 'Acesso restrito',
            'internal-server-error' => 'Erro interno do servidor :(',
        ],
        'messages' => [
            'link-is-broken' => 'O link está quebrado ou a página foi movida.',
            'access-forbidden' => 'Desculpe, mas você não tem permissão para acessar esta página.',
            'internal-server-error' => 'Por favor, reporte este erro para um administrador.',
        ],
    ],

    'clinic' => [
        'cnpj' => 'Informe o CNPJ da clínica',
        'cep' => 'Informe o CEP da clínica',
        'city' => 'Cidade',
        'state' => 'Estado',
        'register' => [
            'completed' => 'Cadastro concluído!',
            'dear' => 'Prezado(a)',
            'security' => 'Por medidas de segurança, enviamos um e-mail de confirmação.',
            'verify_email' => 'Por favor verifique seu e-mail para continuar.',
            'span' => 'Não esqueça de verificar sua caixa de spam.',
            'analyze' => 'Aguardando análise!',
            'pending' => 'Por favor, aguarde enquanto um Administrador da plataforma analisa seus documentos.'
        ]
    ],

    'attendance' =>[
        'responsible' => 'Digite o nome do responsável',
        'type' => 'Digite o tipo do pet',
        'vet' => 'Digite o id do veterinário',
        'clinic' => 'Digite o id da clínica',
        'rating' => 'Deixe sua avaliação',
    ],

    'email' => [
        'document' => [
            'approved' => [
                'subject' => 'Seus Documentos foram aprovados',
                'message' => 'Seus documentos foram aprovados, você já pode acessar a plataforma',
                'response' => 'Clique no botão abaixo para acessar.',
                'button' => 'Logar na plataforma',
            ],

            'disapproved' => [
                'subject' => 'Você possui documento(s) desaprovado(s) na plataforma.',
                'message' => ' desaprovado na plataforma pelo seguinte motivo: :justification',
                'response' => 'Clique no botão abaixo para revisar os documentos.',
                'button' => 'Visualizar documentos',
            ],
        ],
    ],

    'work_schedule' => [
        'invalid_type_user' => 'Usuário não possui perfil de veterinário.',
        'date_interval_invalid' => 'Usuário já possui escala de trabalho cadastrada nesse intervalo de data.',
        'start_date_valid' => 'Data de início deve ser uma data depois de Data de hoje.',
    ]
];
