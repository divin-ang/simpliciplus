import React from 'react';
import ReactDOM from 'react-dom';
import axios from "axios";
import NavBar from './NavBar/NavBar';
import ChoiceBar from './ChoiceBar/ChoiceBar';
import Menu from './NavBar/Menu';
import Breadcrumbs from './Breadcrumbs/Breadcrumbs';

class Example extends React.Component{
    constructor(props) {
        super(props);
        this.state = {
            email: "",
            emails:[]
           
          
        };
        
    }
    componentDidMount(){
        this.getEmails.bind(this)()
    }
    componentDidUpdate(){
        this.getEmails.bind(this)()
    }
    
    async getEmails(){
        
       await axios.post("/emails",{email:"angapaydivin@gmail.com"})
       .then(
        (response) => {
           
            this.setState({emails:response.data})}
        
        )
    }
    handleChangeSubmit(e){
        e.preventDefault()
        axios.post('/email', {email:this.state.email})
            .then(
                //response => 
                //alert(JSON.stringify(response.data))
                
                )
            .catch(error => {
                console.log("ERROR:: ",error.response.data);
                
                });
    
    }
    handleChange(e) {
        this.setState({
            email: e.target.value
        });
        console.log('onChange', this.state.email);
    }
    display(){
        let d = this.state.emails.map((v,i)=><div key={i}>
            <p>{v.email}</p>
        </div>
        )
        return d;
    }
   render(){
    return (
        <div >
           <div id="side">
              <Menu></Menu>
           </div>
           <div id="contain">
           <NavBar></NavBar>
           
           <ChoiceBar></ChoiceBar>
            <Breadcrumbs></Breadcrumbs>
             <form onSubmit={this.handleChangeSubmit.bind(this)}>
                 <label htmlFor="email">email</label>
                 <input type="email" placeholder="email" name="email" onChange={e=>{
                     this.handleChange.bind(this)(e)
                 }}/> 

                 <button type="submit">envoyer</button>

             </form>

                
             {this.display.bind(this)()}
             
             <input name="imprimer" type="file"></input>
           </div>
             
            </div>

    );
}
}

export default Example;

