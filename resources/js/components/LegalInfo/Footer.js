import { Link } from 'react-router-dom'
import '../../../css/Footer.css'

const Footer = () => {

    return (
        <div className='footer-container'>
            <div className="footer">
               
                <Link className="footer-item" to="/accessibilite">Accessibilité</Link>
                <Link className="footer-item" to="/mentions-legales">Mentions Légales</Link>
                <Link className="footer-item" to="/donnees-personnelles">Données personnelles</Link>
               
            </div>

        </div>
    );
}
export default Footer;