$(function(){

    const $views = [...document.querySelectorAll(".view")];
    const $affiches = [...document.querySelectorAll(".affiche")];
    // const $cancel = document.getElementById("retour");

        for(i=0; i<$views.length;i++){
                $views[i].classList.add("active");
        }

        $affiches.forEach(element => element.addEventListener('click', (e)=>{
            
            for(i=0; i<$affiches.length;i++){
                if($affiches[i] != $affiches[$affiches.indexOf(element)]){
                    $views[i].classList.add("active");
                }
            }

            $views[$affiches.indexOf(element)].classList.remove("active");
        
        }))

});