<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'> -->

    <style>
    /* body {
  background: rgb(204,204,204); 
} */
/* page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
} */
/* page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
} */
/* page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
} */
/* page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
/* @media print { */
  /* body, page {
    margin: 0;
    box-shadow: 0;
  }
} */ */
.contener{
    /* margin:2%; */
    padding:2%;
}

.intro{
    text-align:justify;
    font-size: 13px;
}

.paragraph{
    line-height: 1.5;
}

.title{
    font-size: 16px;
    font-weight:bold;
    text-decoration: underline
}
.main{
    /* margin-left:2%; */
    padding-top: 5px;
}

.info{
    display:flex;
    flex-direction:row;
    width: 100%;
    /* border: 1px dotted; */
    border-radius: 20px;
    /* justify-content: space-between; */
}
.info3{
    margin-top:15px;
    flex-direction:row;
    border: 1px inset;
    font-size:13px;
    text-align: justify;
    line-height: 1.5;

}

li{
    padding-right: 10px;
    font-size:14px;
    line-height: 1.5;
}

.p{
    padding-right: 10px;
    font-size:14px;
    line-height: 1.5;
}
.info1{
    border-radius: 25px;
    display:flex;
    flex-direction:row;
    border: 3px solid #73AD21;
    padding-top: 5px;
    padding-bottom: 5px;

}
.company{
    border: 3px solid purple;
    width:42%;
    padding:3%;
    border-radius: 20px;
    /* margin-right : 3px; */
}
.client{
    border: 3px solid purple;
    width:42%;
    padding:3%;
    border-radius: 20px;
    float: right;
    margin-top: -328px
    /* margin-left : 3px; */
}
.company1{
    width:50%;
    padding:3%
}
.client1{
    width:50%;
    padding:3%
}

.target{
    font-weight:bold;
    text-decoration: underline
}
.target1{
    font-weight:bold;
    font-style:italic;
    border: 1px solid;
    text-align: justify;
    padding-left: 20px;
    text-decoration: italic;

}
.list{
    margin-bottom: 15px;
    font-size:14px;
    line-height: 1.5;
}
table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  /* border: 3px solid purple; */
}

thead th:nth-child(1) {
  width: 30%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 35%;
}

th, td {
  padding: 5px;
}
.tabresult {
  font-family: 'Brush Script MT', 'cursive', helvetica, arial, sans-serif;
  font-style:italic;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}



tbody {
  text-align: justify;
  padding-top: 5px;
  padding-bottom: 5px;
  justify-content: center;
}

td {
  text-align: justify;
  padding-top: 5px;
  padding-left: 25%;
}

tfoot th {
  text-align: right;
}

</style>
</head>
<body>

    <div class="contener">
        <div class="intro">
        <p class="paragrah">
            Considérant que l'emprunteur, Mme ou M…. souhaite emprunter au prêteur, Bank trading, une somme d'argent déterminée;
            Considérant que le prêteur, Bank trading, s'engage à prêter ladite somme d'argent à l'emprunteur, Mme ou M…. dans les conditions et modalités mentionnées ci-dessous; 
            Considérant que les parties souhaitent confirmer leur accord par écrit;
            Considérant que les parties ont la capacité et la qualité d'exercer tous les droits nécessaires à la conclusion et à l'exécution des termes mentionnés dans le présent contrat.
        </p>
        <ol class="main">
            <li class="title">
                <strong>
                IDENTIFICATION COMPLETE DES PARTIES
                </strong>
            </li>
        </ol>
        <p>
            Cet accord est conclu entre:
        </p>
        <div class ="info">
            <div class="company">
                <p class="paragrah">
                    <strong>
                    LENDER
                    </strong>
                    <div>
                        <p> <span class="target">Name:</span> <span>BANK TRADING COMPANY </span> 
                        </p><span class="target"></span>
                        <p><span class="target">Capital:</span> <span>C CORPORATION COMPANY WITH CAPITAL OF 2,400000000 $ US </span>
                        </p>
                        <p><span class="target">HEAD OFFICE:</span> <span>5CALIFORNIE, 915WILSHIRE BLVD #1000,LOS ANGELES, CA 90017, US</span>
                        </p>
                        <p><span class="target">EUROPE CONCTANTS:</span> <span>BRANCH OFFICE/REPRESENTATIVE/AGENT/DELEGATE</span>
                        </p>
                        <p><span class="target">Phone:</span> <span>+ 33 7 55 41 29 94/ +49 1512 4723776</span>
                        </p>
                        <p><span class="target">E-mail:</span><span>contact@btrading.com</span>
                        </p>
                    </div>
                </p>
            </div>
            <div class="client">
                <p class="paragrah">
                    <strong>
                    BORROWER
                    </strong>
                </p>
                <div>
                    <p><span class="target">Nom:</span>
                    </p>
                    <p> <span class="target">Prénom:</span>
                    </p>
                    <p><span class="target">Naissance:</span>
                    </p>
                    <p><span class="target">Numéro ID:</span>
                    </p>
                    <p><span class="target">Ville:</span>
                    </p>
                    <p><span class="target">Adresse:</span>
                    </p>
                    <p><span class="target">Tél: </span><span>32775219 </span>
                    </p>
                    <p><span class="target">E-mail: </span><span>montoveronica22@gmail.com</span>
                    </p>
                </div>
            </div>
        </div>
        <ol class="main" start="2">
            <li class = "title">CARACTERISTIQUES DU PRÊT</li>
        </ol>
        <div class ="info1">
            <!-- <div class="company1">
                <p class="paragrah">
                    <div>
                        <p> <span class="target">Objet de prêt:</span> 
                        </p><span class="target"></span>
                        <p><span class="target">Montant du prêt:</span> 
                        </p>
                        <p><span class="target">Durée de remboursement:</span> 
                        </p>
                        <p><span class="target">Mensualité:</span> 
                        </p>
                        <p><span class="target">Date du premier remboursement :</span> 
                        </p>
                        <p><span class="target">Taux de remboursement :</span>
                        </p>
                    </div>
                </p>
            </div>
            <div class="client1">
                <p class="paragrah">
                </p>
                <div>
                    <p class="target1">Immobilier
                    </p>
                    <p class="target1"> 5000000
                    </p>
                    <p class="target1">50 mois
                    </p>
                    <p class="target1">510 €
                    </p>
                    <p class="target1">05/10/2023
                    </p>
                    <p class="target1">3%
                    </p>
                </div>
            </div> -->
            <table>
  <!-- <caption>Récapitulatif des groupes punk les plus célèbres du Royaume-Uni</caption> -->
  <!-- <thead>
    <tr>
      <th scope="col">Groupe</th>
      <th scope="col">Année de formation</th>
    </tr>
  </thead> -->
  <tbody>
    <tr>
      <td  class="target" scope="row">Objet de prêt:</td>
      <td class = "tabresult">Immobilier</td>
    </tr>
    <tr>
      <td class="target" scope="row">Montant du prêt:</td>
      <td class = "tabresult">5000000 €</td>
    </tr>
    <tr>
      <td class="target" scope="row">Durée de remboursement</td>
      <td class = "tabresult">120 mois</td>
    </tr>
    <tr>
      <td class="target" scope="row">Mensualité</td>
      <td class = "tabresult">952 €</td>
    </tr>
    <tr>
      <td class="target" scope="row">Date du premier remboursement</td>
      <td class = "tabresult">12/10/2022</td>
    </tr>
    <tr>
      <td class="target" scope="row">Taux de remboursement</td>
      <td class = "tabresult">3%</td>
    </tr>

    
  </tbody>
</table>
        </div>
        <div class ="info3">
            <ul>
                <li>Les intérêts sont calculés au Taux Annuel Effectif Global (TAEG) en appliquant la méthode équivalente. Le TAEG est l'expression annuelle du taux d'intérêt. Le TAEG est calculé conformément à l'hypothèse que le contrat de crédit reste valable pour la période convenue, le prêteur et l'emprunteur remplissent leurs obligations dans les conditions et dans les délais spécifiés dans le contrat de crédit et le montant total du crédit est réputé pour être pleinement et immédiatement utilisé.</li>
                <li>Les intérêts sont calculés sur la base d'une année de 360 ​​jours comprenant 12 mois de 30 jours. Les intérêts sont payables mensuellement avec amortissement.</li>
                <li>Le montant total dû correspond à la somme du montant total du crédit et du coût total du crédit. Par coût total du crédit, on entend le montant total des intérêts.</li>
                <li>Le prêt est accordé après le paiement des frais d’assurance. Les frais d’assurance représentent les 3% du montant total du crédit. Ils sont versés à compagnie d’assurance du prêteur.</li>
            </ul>
        </div>
    </div>
    </div>
    
<!-- </page>
<page size="A4"> -->
    <div class="contener">
        <div class="intro">
        <ol class="main" start="3">
            <li class = "title">CONDITIONS GENERALES DU PRÊT</li>
        </ol>
        <ul class="" start="3">
            <li class = "list">Demande: Le Prêteur consent à l'Emprunteur, qui accepte, un prêt à intérêt du montant ci-après fixé. Cet emprunt est fait en respect des dispositions prévues par le Federal Deposit Insurance Corporation (FDIC-US), et  est régi également par les articles 1905 à 1914 du Code de l’European Banking Autority (EBA). En vertu de la loi 24-05 alinéas 2, 3, 4 du 27 avril 1992 régissant les contrats de prêt et de crédit, le bénéficiaire doit respecter les termes dudit contrat. Afin d'éviter la contestation, une clause d'annulation ne peut être convenue que sur le consentement des deux parties (article 93-95 de  la directive européenne sur les contrats de crédit).</li>
            <li class = "list">Retards de paiement: Dans l'hypothèse où le principal de la créance, les intérêts et accessoires ou une fraction des amortissements seraient impayés à l'échéance, en tout ou en partie, le taux du prêt sera majoré de 03 points, sans préalable avis. Ce taux majoré sera également appliqué aux intérêts, lorsqu'ils sont dus pour une année entière, en application de l'article 154 de  la directive européenne sur les contrats de crédit. Cette stipulation d'intérêts ne peut préjuger du paiement anticipé du prêt dans les conditions prévues par la loi et, par conséquent, être considérée comme un accord pour la période de règlement. En ses articles 14 et 15, le code de l’European Banking Autority confère également au prêteur la prérogative de faire constater les impayés par un huissier. En cas de retard de paiement de plus de 12 mensualités, en vertu des normes prévues par l’autorité juridique de Bank Trading,  nous pouvons contraindre la compagnie d'assurance à remplacer l'emprunteur pour payer le solde dû. Dans tous les cas, l'emprunteur doit rembourser au prêteur les frais occasionnés par son défaut.</li>
            <li class = "list">Amortissement: Le prêt sera amorti au moyen de mensualités constantes selon un échéancier de remboursement prédéterminé, comprenant une partie de l'amortissement du principal et des intérêts au taux indiqué ci-dessus. Le prêt sera remboursé par versement sur le compte bancaire du prêteur. Les références de ce compte bancaire seront transmises à l'emprunteur une fois le prêt finalisé. Un délai de grâce de trois (3) mois est accordé à l'emprunteur pour le début du remboursement du prêt. Un remboursement partiel supérieur à l'amortissement obligatoire ou intégral du prêt peut être effectué par l'emprunteur avant cette échéance. Le prêt sera remboursé sur le compte bancaire du prêteur, que ce dernier s'engage à fournir à l'emprunteur dès que le prêt sera finalisé.</li>
            <li class = "list">Conditions de mise à disposition des fonds: Le montant total du crédit est mis à la disposition de l’emprunteur, au plus tard le 3ème jour suivant la date de signature du contrat du prêt, et sous réserve de la réception d'un certificat de réception des frais d’assurance de la part de  notre assureur. Le prêt sera envoyé par virement bancaire du prêteur à l'emprunteur, qui le reconnaîtra. Les details du compte bancaire de l'emprunteur sont les suivants:</li>
        </ul>
        <hr>
        <div class="main">
            <div> <span class="target">Nom de la banque:</span> <span>Commerz Bank</span></div> 
            <div> <span class="target">Numéro de compte</span> </div> <span></span>
            <ul>
                <li ><span class="target">IBAN </span><span>: DE49 1452 1586 458962</span></li>
                <li><span class="target">BIC </span><span>: MALADEXXX</span></li>
            </ul>
        </div>
        <hr>
        <ul>
            <li class = "list">Le prêteur s'engage à signer une lettre de décharge lorsque le paiement final est confirmé et que l'emprunteur a rempli toutes ses obligations envers le prêteur. Le paiement mensuel sera justifié par un accusé de réception 3 jours au plus tard après la réception. La date exacte du paiement mensuel sera décidée par l’emprunteur, en fonction de la réception et de la disponibilité de ses revenus sur le long terme. Pour prévenir d’éventuels empêchements, une marge de trois jours ouvrés, avant et après cette date, qui sera convenue des deux parties et précisée sur l’échéancier du remboursement, est accordée.</li>
        </ul>
        </div>
    </div>
    </div>
    
<!-- </page>
<page size="A4"> -->
    <div class="contener">
        <div class="intro">
        <ol class="main" start="4">
            <li class = "title">CONDITIONS AUXILLIAIRES DU PRÊT</li>
        </ol>
        <ul class="" start="3">
            <li class = "list">Le prêteur peut exiger le remboursement du prêt au pair, majoré des intérêts courus, si l'une des hypothèses suivantes est retenue:</li>
            <ul>
                <li>L'emprunteur n'a pas payé les intérêts obligatoires ou l'amortissement du prêt pendant plus de 15 jours;</li>
                <li>L'emprunteur déclare qu'il ne peut plus assumer ses obligations pécuniaires;</li>
                <li>L'emprunteur est insolvable.</li>
            </ul>
        </ul>
       
        <ul>
            <li class = "list">Le prêteur s'engage à signer une lettre de décharge lorsque le paiement final est confirmé et que l'emprunteur a rempli toutes ses obligations envers le prêteur. Le paiement mensuel sera justifié par un accusé de réception 3 jours au plus tard après la réception. La date exacte du paiement mensuel sera décidée par l’emprunteur, en fonction de la réception et de la disponibilité de ses revenus sur le long terme. Pour prévenir d’éventuels empêchements, une marge de trois jours ouvrés, avant et après cette date, qui sera convenue des deux parties et précisée sur l’échéancier du remboursement, est accordée.</li>
        </ul>
        <ul>
        <p>En cas de décès de l'emprunteur (éventuellement: ou des cautions), dans cette éventualité, il y aurait solidarité et indivisibilité entre leurs héritiers et représentants pour le paiement des sommes dues en principal et accessoires nonobstant les dispositions de l'article 220 du code de l’European Banking Autority. Les frais de signification du titre prescrits par l'article 377 du Code l’European Banking Autority  seront à la charge exclusive de ceux à qui elle sera faite (personne physique ou morale)  ou de l’assurance.</p>
            <li>
                Cessation d'activité de l'emprunteur, pour quelque raison que ce soit;
            </li>
            <li>Dissolution de la structure juridique de l'emprunteur;</li>
            <li>Difficultés économiques et financières reflétant une situation irrémédiablement compromise de l'emprunteur;</li>
            <li>En cas de fusion, scission ou dissolution de l'emprunteur.</li>
        </ul>
        <ul>
        <p>L'emprunteur s'engage à informer le Prêteur, dans les meilleurs délais, de tout événement susceptible de rendre le prêt exigible. Lorsque le prêteur a déclaré le prêt dû, l'emprunteur doit:</p>
            <li>rembourser immédiatement le principal dû;</li>
            <li>payer les intérêts dus  à quelque titre que ce soit, jusqu'à la date de leur règlement effectif (les sommes restant dues, tant en capital qu'en intérêts, produiront des intérêts de retard à un taux égal à celui de l'emprunt).</li>
        </ul>
        <ul>
            <li>Indemnité - De plus, l'emprunteur devra payer une indemnité de 01% des sommes dues au titre du principal restant dû, ainsi que les intérêts courus et impayés.
(Eventuellement) Transfert de dette - Le prêteur se réserve le droit de céder sa créance contre l'emprunteur, en vertu de ce prêt, par tout moyen légal, tel que cession, subrogation ou autre.</li>
        </ul>
        <ol class="main" start="5">
            <li class = "title">GARANTIE, TRANSFERT ET FRAIS</li>
        </ol>
        <p>L'emprunteur déclare et garantit au prêteur ce qui suit:</p>
        <ul>
            <li>La signature du contrat et l'exécution des obligations qui en découlent ne contreviennent en aucune manière ni aux textes légaux et réglementaires qui lui sont applicables, ni à tout engagement auquel il pourrait être lié;</li>
            <li>Aucune mesure ou procédure extrajudiciaire n'a été ou n'est en cours d'être engagée contre l'emprunteur;</li>
        </ul>
        </div>
    </div>
    </div>
<!-- </page>

<page size="A4"> -->
    <div class="contener">
        <div class="intro">
        <ul class="">
            <li class = "list">L'emprunteur n'est pas dans un état de cessation des paiements qui pourrait entraver, limiter ou nuire à sa capacité à exécuter ses obligations contractuelles.</li>
        </ul>
       
        <ul>
            <li class = "list">Les frais de transfert dans le cadre de ce contrat sont à la charge de la partie qui effectue le transfert à destination de l’autre.</li>
        </ul>
                <p>Tous les frais liés à la mise en place de ce contrat sont entièrement à la charge des parties au contrat comme suit :</p> 
        <ul>
            <li>L’emprunteur ne prendra en compte que les frais de l’assurance du crédit fixés à 3% du montant du prêt par notre assureur après l’enregistrement de sa demande.</li>
            <li>L’emprunteur est tenu de signer un accord de confidentialité et d'exclusivité avant la mise en œuvre de ce financement afin de sécuriser toutes les informations résultant des transactions. </li>
            <li>L’emprunteur s'engage à effectuer toutes les formalités de la banque déposant les fonds lors de la mise en place du virement de crédit. Le virement étant effectué selon les conditions bancaires. </li>
            <li> L'emprunteur est tenu de fournir au prêteur tous les détails nécessaires pour faciliter le transfert de fonds.</li>
            <li>Il appartient à l'emprunteur, mais en aucun cas au prêteur d'assumer tous les risques de change qui peuvent survenir, dans le cas où la devise dans laquelle les fonds sont reçus est différente de la devise utilisée par le prêteur pour consentir ce prêt.</li>

        </ul>
        </div>
    </div>
    </div>
<!-- </page> -->
</body>
</html>


<!-- <page size="A4" layout="landscape"></page>
<page size="A5"></page>
<page size="A5" layout="landscape"></page>
<page size="A3"></page>
<page size="A3" layout="landscape"></page> -->

