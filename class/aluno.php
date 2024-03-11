<?php class Aluno {

    private $nome;
    private $email;
    private $senha;
    private $assunto;
    private $mensagem;
    private $nivel;
    private $decricao;

    public function __construct() {}

    public function create($_nome, $_email, $_senha) {
        $this->nome=$_nome;
        $this->email=$_email;
        $this->senha=md5($_senha);
    }

    //* get and set from Nome

    public function getNome() {
        return $this->nome;
    }

    public function setNome($_nome) {
        $this->nome=$_nome;
    }

    //*


    //* get and set from Email

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($_email) {
        $this->email=$_email;
    }

    //*

    //* get and set from Senha

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($_senha) {
        $this->senha=$_senha;
    }

    //*

    //* get and set from Assunto

    public function getAssunto() {
        return $this->assunto;
    }

    public function setAssunto($_assunto) {
        $this->assunto=$_assunto;
    }

    //*

    //* get and set from Mensagem

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($_mensagem) {
        $this->mensagem=$_mensagem;
    }

    //*

    //* get and set from Nivel

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($_nivel) {
        $this->nivel=$_nivel;
    }

    //*

    //* get and set from Descrição

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($_descricao) {
        $this->descricao=$_descricao;
    }



    //*

    //?Função de inserir usuário

    public function inserirAluno() {
        try {
            include_once("./db/conn.php");
            $sql="CALL piAluno(:nome, :email, :senha)";

            $data=[ 'nome'=>$this->nome,
            'email'=>$this->email,
            'senha'=>$this->senha,

            ];

            $statement=$conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        catch (\Exception $e) {
            return false;
        }

    }

    //?

    //?Função de listar o usuário

    public function listarAluno() {
        try {
            include("../db/conn.php");

            $sql="CALL psAluno('')";
            $data=$conn->query($sql)->fetchAll();

            return $data;
        }

        catch (\Exception $e) {
            return false;
        }
    }

    //?

    //?Função de autenticar o usuário

    public function autenticarAluno($_email, $_senha) {

        try {

            include("./db/conn.php");
            $sql="CALL psLoginAluno('$_email', md5('$_senha'))";
            $stmt=$conn->prepare($sql);

            $stmt->execute();

            if ($user=$stmt->fetch()) //se encontrar registro

                {
                $this->nome=$user["nome"];
                return 1;
            }

            else {
                return 0;
            }
        }

        catch (\Exception $e) {
            return false;
        }

    }

    //?Função de deletar o usuário

    public function delUsuario($_id) {
        try {
            include("../db/conn.php");
            $sql="CALL delUsuario(:id)";

            $data=[ 'id'=>$_id];

            $statement=$conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        catch (\Exception $e) {
            return false;
        }
    }

    //?

    //?Função de atualizar o usuário

    public function atualizarUsuario($_id) {

        try {
            include("../db/conn.php");
            $sql="CALL upUsuario(:email, :cidade, :senha, :id)";

            $data=[ 'id'=>$_id,
            'email'=>$this->email,
            'cidade'=>$this->cidade,
            'senha'=>$this->senha];

            $statement=$conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        catch (\Exception $e) {
            return false;
        }
    }

    //?

    //?Função de buscar o usuário

    public function buscarUsuario($_id) {
        include("../db/conn.php");

        $sql="CALL bsUsuario('$_id')";
        $data=$conn->query($sql)->fetchAll();

        foreach ($data as $item) {
            $this->nome=$item["nome"];
            $this->email=$item["email"];
            $this->dtNascimento=$item["dtNascimento"];
            $this->cidade=$item["cidade"];
            $this->senha=$item["senha"];
        }

        return true;
    }

    
    public function faleConosco() {
        try {
            include_once("./db/conn.php");
            $sql="CALL faleConosco(:nome, :email, :assunto, :mensagem)";

            $data=[ 'nome'=>$this->nome,
            'email'=>$this->email,
            'assunto'=>$this->assunto,
            'mensagem'=>$this->mensagem];

            $statement=$conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        catch (\Exception $e) {
            return false;
        }

    }

    public function listarAulas($_id) {
        try {
            include("./db/conn.php");

            $sql="CALL psAula('$_id')";
            $data=$conn->query($sql)->fetchAll();

            return $data;
        }

        catch (Exception $e) {
            return false;
        }
    }

    public function informacaoDoCurso($_idCurso, $_idAula) {
        try {
            include("./db/conn.php");

            $sql="CALL psVisualizarCurso('$_idCurso', '$_idAula')";
            $data=$conn->query($sql)->fetchAll();

            return $data;
        }

        catch (Exception $e) {
            return false;
        }
    }

    public function listarCurso() {
        try {
            include("./db/conn.php");

            $sql="CALL pslistarCurso()";
            $data=$conn->query($sql)->fetchAll();

            return $data;
        }

        catch (Exception $e) {
            return false;
        }
    }

?>