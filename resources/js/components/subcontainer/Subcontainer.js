import React, { Component } from "react"
import Menu from "../NavBar/Menu"
import NavBar from "../NavBar/NavBar"

import Breadcrumbs from "../Breadcrumbs/Breadcrumbs"
import Title from "../Container/Title"
import "../../../css/Subcontainer.css"
import Contrast from "../Contrast/Contrast"

import { NavLink,Link } from "react-router-dom"
export default class Subcontainer extends Component{
    constructor(props){
      
        super(props)
        this.state ={
            processes:[],
            id:props.location.id,
            sub_container:[]
        }
        this.extractsSubCategories=this.extractsSubCategories.bind(this)
        this.sub_container_processes.bind(this)
    /* check if the process_id coming through the url is 
      set on the current session,if not use the session process_id
    
    */ 

        if(props.location.id){

            sessionStorage.setItem("process_id",props.location.id) 
            sessionStorage.setItem("container_name",props.location.name)
            sessionStorage.setItem("container_icon",props.location.icon) 
            
        }
    }

    extractsSubCategories(data=Array()){
        let array=[]
        array.push({subcontainer_name:data[0].subcontainer_name,processes:[]})
        for(let i=0;i<data.length;i++){
            let found =false
            for(let y =0;y<array.length;y++){
                if(array[y].subcontainer_name===data[i].subcontainer_name){
                    found =true;
                }
                   
            }
            if(found===false){
                array.push({subcontainer_name:data[i].subcontainer_name,processes:[]})
            }
        }
        return array
      }
    // group processes by sub containers and return a new array
      sub_container_processes(data=Array()){
          let array = this.extractsSubCategories(data)
          console.log(array,"array")
          for(let i=0;i<data.length;i++){
           for(let y=0;y<array.length;y++){
               if(data[i].subcontainer_name===array[y].subcontainer_name){
                 
                  array[y].processes.push(data[i]) 
                
               }
           }
          }
          return array
   
       }
       // get processes from the database
      getContainerProcesses(){
          
          axios.get("/get-processes",{ params: {id:sessionStorage
              
              
              .getItem("process_id")} })
          .then((response)=>{
              
                this.setState({
                    processes:this.sub_container_processes(response.data),
                    sub_container:this.extractsSubCategories(response.data)
                  })
          })
      }
     componentDidMount(){
         console.log(this.
            
            
            
            
            props.location.id)
         this.getContainerProcesses.bind(this)()
       
     }
     componentDidUpdate(){
     
     }
     componentWillUnmount() {
      // fix Warning: Can't perform a React state update on an unmounted component
      this.setState = (state,callback)=>{
          return;
      };
  }
  // handle section choose on scrolling
  
  render(){
      return(
          <div>
               <div id="side" >
                   <div className="">
                   <Menu></Menu>
                   <Contrast></Contrast>
                   </div>
                   
                    </div>
                <div id="contain">   
                 <div className=" sticky-top ">
                   <div className="tablet-nav "> 
                     <div className="nav-position fixed ">
                     <NavBar></NavBar>
                     </div> 
                   <div className="desk-bread desk-bread-cont">
                       <div className="bread-text">
                       <Breadcrumbs></Breadcrumbs>
                       </div>
                       
                   </div>

                   <div className="subcontainer">
                     <div className="title-group"> 
                             <Title></Title>
                            
                     
                     </div>
                     <h3>Choisissez une rubrique</h3>
                       {
                           
                           this.state.processes.map((value,index)=>

                            <button key={index.toString()} className="topic-item"> 
                           <Link to={{
                                 pathname:"/sous-categories/"+value.container_id+"/"+value.container_name+"/mes-demarches/rubriques"+"/"+index,
                                 id:value.container_id,
                                 name:value.container_name,
                                 icon:value.container_icon,
                                 category_index :index
                               
                           }}>{value.subcontainer_name}
                           </Link>


                            </button>
                           )

                       }
                       {
                        this.state.processes.length>0? <button className="topic-item"> 
                           <Link to={{
                                 pathname:"/sous-categories/"+this.state.processes[0].container_id+"/"+this.state.processes[0].container_name+"/mes-demarches/rubriques"+"/"+-1,
                                 id:this.state.processes[0].container_id,
                                 name:this.state.processes[0].container_name,
                                 icon:this.state.processes[0].container_icon,
                                 category_index :-1
                               
                           }}>Montrez moi l'ensemble des services
                           </Link>


                            </button>:""
  }

                   </div>
                   </div> 
              </div>
               

       
       
     
     </div>
            



                 
          </div>  

      )
  }
}