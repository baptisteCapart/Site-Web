function verif(){
	
	if (document.formCo.login.value!='' && document.formCo.pwd.value!='') {
		return true;
	}else{
		alert('merci de remplir tous les champs');
		return false;
	}
	;
}

function verifPseudo() {
	var pseudo = document.formIn.pseudo;
	if(pseudo.value.length < 6 || pseudo.value.length > 25){
		pseudo.style.border = "1px solid red";
		alert('le pseudo doit faire entre 6 et 25 caractères');
		return false;
	}else{
		pseudo.style.border = "1px solid #00E800";
		return true;	
	};
}


function pwdComplex()
{
	var mdp = document.formIn.mdp;
	var myRegex = new RegExp("^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*[0-9]+)([^\\s]{6,})$", "g");
	if(mdp.value.match(myRegex)){
		return true;
	} else {
		alert('le mot de passe doit contenir des lettres minuscules et majuscules ainsi que des chiffres');
		return false;	
	}
}

function code()
{
	var code = document.formIn.codepostal;
	var myRegex = new RegExp("^(?=.*[0-9]+)([^\\s]{5,})$", "g");
	if(code.value.match(myRegex)){
		return true;
	} else {
		alert('vous devez entrer un code postal à 5 chiffres');
		return false;	
	}
}

function verifmdp(){
	var mdp = document.formIn.mdp;
	var mdp2 = document.formIn.mdp2;
	if(mdp.value != mdp2.value){
		mdp.style.border = "1px solid red";
		mdp2.style.border = "1px solid red";
		alert('les 2 mots de passe sont différents');
		
		return false;
	}else{
		mdp.style.border = "1px solid #00E800";
		mdp2.style.border = "1px solid #00E800";
		return true;
	}	
}

function grosseVerif(){
	var pseudo = document.formIn.pseudo;
	var mdp = document.formIn.mdp;
	var mdp2 = document.formIn.mdp2;
	var mail = document.formIn.mail;
	var age = document.formIn.age;
	var sexe = document.formIn.sexe;
	var ville = document.formIn.ville;
	var pays = document.formIn.pays;
	var codepostal = document.formIn.codepostal;


	if(pseudo.value =='' || mdp.value =='' || mdp2.value =='' || mail.value =='' || age.value ==''
		|| sexe.value =='' || ville.value =='' || codepostal.value =='' || pays.value =='' ){
		alert('merci de remplir tous les champs');
		return false;
	}else{
		return true;
	}
}
function caroussel(){
	$(document).ready(function(){
        $("#caroussel").each(function(){
            var t = setInterval(function(){
                $("#caroussel ul").animate({marginLeft:-1350},2000,function(){
                    $("#caroussel ul li:last").after($("#caroussel ul li:first"));
                    $(this).css({marginLeft:0});
                })
            },5000);
        });
   });
}

function upload()
{
	var photo = document.formIn.photodeprofil;
	var photo2= document.formIn.photodecover;
	var file = photo.value;
	var file2 = photo2.value;
    var listeExt = new Array("jpg","png","gif","jpeg");
    var extension = file.split('.');
    var file_extension = (extension[(extension.length-1)]);
    var extension2 = file2.split('.');
    var file_extension2 = (extension2[(extension2.length-1)]); 

    for(var i = 0; i <= listeExt.length; i++)
    {
        if(listeExt[i]==file_extension && listeExt[i]==file_extension2)
        {
            return true; // valid file extension
        }
        if(listeExt[i]==file_extension && file_extension2=="")
        {
            return true; // valid file extension
        }
        if(file_extension=="" && listeExt[i]==file_extension2)
        {
            return true; // valid file extension
        }
        if(file_extension=="" && file_extension2=="")
        {
            return true; // valid file extension
        }        
    }
	alert('le format de votre photo de profil et/ou de couverture est incompatible, merci de prendre un fichier jpg png ou gif');
    return false;
}



function checkExt()
{
	var photo = document.formA.photogroupe;
	var file = photo.value;
    var listeExt = new Array("jpg","png","gif");
    var extension = file.split('.');
    var file_extension = (extension[(extension.length-1)]);

    for(var i = 0; i <= listeExt.length; i++)
    {
        if(listeExt[i]==file_extension)
        {
            return true; // valid file extension
        }
        if(file_extension=="")
        {
            return true; // valid file extension
        }          
    }
	alert('format de la photo de couverture incompatible');
    return false;
}

function checkExtS()
{
	var photo = document.formS.photosalle;
	var file = photo.value;
    var listeExt = new Array("jpg","png","gif");
    var extension = file.split('.');
    var file_extension = (extension[(extension.length-1)]);

    for(var i = 0; i <= listeExt.length; i++)
    {
        if(listeExt[i]==file_extension)
        {
            return true; // valid file extension
        }
        if(file_extension=="")
        {
            return true; // valid file extension
        }        
    }
	alert('format de la photo de couverture incompatible');
    return false;
}

function checkExtE()
{
	var ex1 = document.formE.extrait1;
	var file = ex1.value;
    var listeExt = new Array("mp3","wav");
    var extension = file.split('.');
    var file_extension = (extension[(extension.length-1)]);

    for(var i = 0; i <= listeExt.length; i++)
    {
        if(listeExt[i]==file_extension)
        {
            return true; // valid file extension
        }      

    }
	alert('format de fichier incompatible');
    return false;
}