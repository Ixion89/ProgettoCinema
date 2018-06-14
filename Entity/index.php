<?php
function __autoload($classname) {
         $filename="./".$classname.".php";
         include_once($filename);}
         
/*$s=new ESala('Aurora',40,'Anfiteatro');
var_dump($s);
$s->set_nome('Venere');
var_dump($s);
echo ('Il nome della sala e:'.$s->get_nome()); */

$st=new EStruttura();
$s=new ESala ();
$s->costruttore('Aurora',40,'Anfiteatro');
$ls[]=$s;
$s1=clone($s);
$s1->costruttore('Zefiro',30,'Ferro Cavallo');
$ls[]=$s1;
$lt[]='08:00';
$lt[]='22:00';
$st->costruttore('Movieplex','Via Rocco Carabba','0862888888','mpaquila@movieplex.it',$lt,$ls);
$s2=new ESala();
$s2->costruttore('Venere',35,'Anfiteatro');
$st->add_sala($s2);
$st->set_ora_apertura('09:00');
$st->delete_sala('Zefiro');
//print_r($st);   */

$f=new EFilm();
$ga=array();
$f->costruttore('Dracula','Bram Stoker',1960,90,$ga,$ga,'Pixar');
$f->add_genere('Horror');
$f->add_attore_cast('Leslie Nielsen');
$f->set_titolo('Dracula 2');
//print_r($f);


/*$p=new EPosto();
$p->costruttore('a',19,true);
print_r($p);  */

$m=new EMappa();
//print_r($m);
$m->costruttore(3,4,'quadrangolare');
$m->delete_posti("B",2,3);
$m->delete_posti("B",1,3);
//print_r($m);

$p=EProiezione::costruttore($f,$s,'13-06-2018','12,00',$m,"3");
$p1=EProiezione::costruttore($f,$s1,'14-06-2018','13,00',$m,"2");
//print_r($p);

$x=$m->get_schema();
$i[]=EItem::costruttore($p,$x['A'][1]);
$i[]=EItem::costruttore($p1,$x['C'][2]);
$i[0]->sconta_valore(2);
//print_r($i);
//print_r($i);
$cred=new ECredenziali();
$cred->costruttore('123456789','Visa','12/18');
$prof=new EProfilo ();
$prof->costruttore($cred,$ga);
$u=new EUtente('teresabove@prova.it','000',$prof);
$pag=EPagamento::costruttore('F000',$i);
$pag->pagamento();
//print_r($pag);

$biglietto=$pag->crea_biglietto();
$biglietto->stampa_biglietto();


?>
