

    loadBreweries(){

        let t = this
        this.showLoading()

        let start = (this.page * this.itensPerPage) - (this.itensPerPage)
        let end = this.page * this.itensPerPage
        let qString = "";

        if (this.search){
          qString = `&q=${this.search}`
        }

        this.$http.get(`/breweries?_start=${start}&_end=${end}${qString}`).then(
         response=>{
           t.breweries = response.json()
           t.total = response.headers['X-Total-Count']
         },
         error=>{
           console.log(error)
         }).finally(function () {
          t.hideLoading();
        })

       },
   searchBreweries(){
        this.loadBreweries()
       },
       newBreweries(){
        this.selected={}
        this.showModal = true;
       },
       editBrewery(brewery){
        this.selected=brewery
        this.showModal = true;
       },
function removeUsuario(idUsuario){
      let self = this;
      swal({  title: "Você tem certeza?",
               text: `Deseja apagar "${brewery.name}"`,
               type: "warning",
               showCancelButton: true,
               confirmButtonColor: "#DD6B55",
               cancelButtonText: "Cancelar",
               confirmButtonText: "Sim, pode apagar!",
               showLoaderOnConfirm: true,
               closeOnConfirm: false }, function(){

                self.$http.delete(`/usuario/${idUsuario}`).then(
                  result=>{
                    swal("Cervejaria removida!")
                    self.loadBreweries()
                  })
      });

}

 function saveBrewery(){
      if (this.selected.id!=null){  //EDIT
        this.$http.put(`/breweries/${this.selected.id}`,this.selected).then(
          response=>{
            this.$set('selected',{})
            this.$set('showModal',false)
          },
          error=>{
            console.error(error)
          }
          ).finally(
            this.loadBreweries()
          )
        }
        else
        { //NEW
          this.$http.post(`/breweries`,this.selected).then(
          response=>{
            this.$set('selected',{})
            this.$set('showModal',false)
          },
          error=>{
            console.error(error)
          }
          ).finally(
            this.loadBreweries()
          )
        }
     }
  }
