<?php 

namespace GenericMvc\Entity;

use GenericMvc\Entity\Transacao;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="conta")
 */

 class Conta{

    /**
     * @var integer $idconta
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $idconta;


    /** 
    * @var object $usuario
    * @ManyToOne(targetEntity="Usuario", inversedBy="contas")
    * @JoinColumn(name="usuario", referencedColumnName="idusuario", nullable=false)
    */
    private $usuario;


    /**
    * @var string $nome
    * @Column(type="string")
    */
    private $nome;


    /**
     * @var string $descricao
    * @Column(type="string")
    */
    private $descricao;


    /**
    * @var double $saldo
    * @Column(type="string")
    */
    private $saldo;



    /**
     * @var ArrayCollection Coleção de Transações
     *
     * @ORM\OneToMany(targetEntity="Transacao", mappedBy="conta")
     */
    private $transacoes;


    public function __construct(){
        $this->transacao = new ArrayCollection();
    }


    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }


    public function getTransacoes(){
        return $this->transacoes;
    }

    public function setTransacoes(ArrayCollection $transacoes){
        foreach ($transacoes as $transacao) {
            $transacao->setEstado($this);
        }
        $this->transacoes = $transacoes;
        return $this;
    }

 }

?>