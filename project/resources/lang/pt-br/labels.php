<?php
/**
 * Cabeçalhos de tabelas e descrição de campos de formulário ficam neste arquivo.
 * Descrições com nome genérico devem começar com underline.
 */

return [
    'common' => [
        'admin' => 'Administrador',
        'user' => 'Usuário',
        'male' => 'Homem',
        'female' => 'Mulher',
        'other' => 'Outro',
        'email' => 'Email',
        'name' => 'Nome',
        'clinica_name' => 'Nome da clínica',
        'full_name' => 'Nome completo',
        'reason_social' => 'Razão social',
        'fantasy_name' => 'Nome fantasia',
        'file_name' => 'Arquivo',
        'type' => 'Tipo',
        'state' => 'UF',
        'created_at' => 'Criado em',
        'updated_at' => 'Atualizado em',
        'sort' => 'Clique aqui para ordernar por :column',
        'search' => 'Buscar',
        'select' => '-- Selecione --',
        'last_update' => 'Última atualização',
        'status' => 'Status',
        'actions' => 'Ações',
        'trading_name' => 'Nome fantasia',
        'cnpj' => 'CNPJ',
        'cnpj_masked' => 'CNPJ (00.000.000/0000-00)',
        'cpf' => 'CPF',
        'gender' => 'Gênero',
        'cpf_masked' => 'CPF (000.000.000-00)',
        'cep' => 'CEP',
        'address_street' => 'Endereço',
        'address_number' => 'Número',
        'address_state' => 'Estado',
        'address_city' => 'Cidade',
        'address_district' => 'Bairro',
        'complement' => 'Complemento',
        'score' => 'Score',
        'score_evaluation' => 'Avaliação',
        'account_verification' => 'Verificação da conta',
        'undefined' => 'Não informado',
        'empty_table' => 'Nenhum registro encontrado.',
        'responsible' => 'Responsável',
        'clinic' => 'Clínica',
        'vet' => 'Veterinário',
        'documents' => 'Documentos',
        'phone' => 'Telefone',
        'born_date' => 'Data de nascimento',
        'born_date_masked' => 'Data de nascimento (00/00/0000)',
        'crmv' => 'CRMV',
        'clinic_info' => 'Informações da clínica',
        'address' => 'Endereço',
        'attendance_id' => 'ID do atendimento',
        'id' => 'ID',
        'age' => 'Idade',
        'medicine' => 'Medicamentos',
        'years' => 'anos',
        'medicines' => 'Medicamentos',
        'note' => 'Notas',
        'frequency' => 'Frequência',
        'situation' => 'Situação',
        'roles' => 'Funções',
        'admin_clinic' => 'Administrador da clínica',
        'optional' => '(Opcional)',
    ],

    'auth' => [
        'name' => 'Nome',
        'email' => 'Email',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmar senha',
        'register_me' => 'Cadastre-se',
        'remember' => 'Lembrar senha',
    ],

    'user' => [
        'password' => 'Senha',
        'password_confirmation' => 'Confirmar Senha',
        'gender_enum' => [
            'm' => 'Masculino',
            'f' => 'Feminino',
            'o' => 'Outro',
        ],
    ],

    'document' => [
        'proof_of_address' => 'Comprovante de endereço',
        'sanitary_surveillance' => 'Licença da vigilância sanitária',
        'social_contract' => 'Contrato social',
        'city_​​hall_permission' => 'Alvará de funcionamento a prefeitura',
        'firefighter_attestation' => 'Atestado de regularidade do Bombeiro',
    ],

    'medicine_frequency' => [
        'once_a_day' => 'Uma vez ao dia',
        'twice_a_day' => 'Duas vezes ao dia',
        'three_times_a_day' => 'Três vezes ao dia ',
        'four_times_a_day' => 'Quatro vezes ao dia',
    ],

    'medicine' => [
        'name' => 'Nome do medicamento',
        'frequency' => 'Frequência do medicamento',
    ],

    'pet' => [
        'dog' => 'Cachorro',
        'cat' => 'Gato',
    ],

    'attendance' => [
        'attempts' => 'Tentantivas',
        'session' => [
            'started' => 'Iniciado em',
            'ended' => 'Terminou em',
            'note' => 'Observação',
            'review_date' => 'Data da Avaliação',
            'without_review' => 'Aguardando avaliação',
        ],
        'weight' => 'Peso',
        'rate' => 'Avaliação',
        'pet_details' => 'Detalhes do pet',
        'clinic_details' => 'Detalhes da clinica',
        'medicine_details' => 'Detalhes dos medicamentos',
        'city_state' => 'Cidade - UF',
        'evaluation' => [
            'positive' => 'Positivo',
            'negative' => 'Negativo'
        ],
    ],

    'pets' => [
        'pet' => 'Pet',
        'name_pet' => 'Nome',
        'name_tutor' => 'Tutor',
        'type' => 'Tipo',
        'weight' => 'Peso',
        'sex' => 'Sexo',
        'age' => 'Idade',
        'cpf' => 'CPF do tutor',
        'photo' => 'Foto do pet',
        'count_register' => 'Pets cadastrados',
        'sex_enum' => [
            'm' => 'Macho',
            'f' => 'Fêmea',
        ],
        'type_enum' => [
            'dog' => 'Cachorro',
            'cat' => 'Gato',
        ],
    ],

    'breeds' => [
        'name' => 'Raça',
    ],
];
