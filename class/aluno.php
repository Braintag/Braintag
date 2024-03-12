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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($_nome) {
        $this->nome=$_nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($_email) {
        $this->email=$_email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($_senha) {
        $this->senha=$_senha;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function setAssunto($_assunto) {
        $this->assunto=$_assunto;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($_mensagem) {
        $this->mensagem=$_mensagem;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($_nivel) {
        $this->nivel=$_nivel;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($_descricao) {
        $this->descricao=$_descricao;
    }

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
    
    public function faleConosco() {
        try {
            include_once("./db/conn.php");
            $sql="CALL faleConosco(:nome, :email, :assunto, :mensagem)";

            $data=[ 'nome'=>$this->nome,
            'email'=>$this->email,
            'assunto'=>$this->assunto,
            'mensagem'=>$this->mensagem,
        ];

            $statement=$conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        catch (\Exception $e) {
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

    public function listarAulas($_id) {
        try {
            include("./db/conn.php");

            $sql="CALL psVisualizarAula('$_id')";
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

            $sql="CALL psCurso()";
            $data=$conn->query($sql)->fetchAll();

            return $data;
        }

        catch (Exception $e) {
            return false;
        }
    }
}
?>