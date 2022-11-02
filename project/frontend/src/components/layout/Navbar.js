import { Link } from 'react-router-dom'

import Container from './Container'

import styles from './Navbar.module.css'
import logo from '../../img/logo.png'

function Navbar() {
    return (
        <nav className={styles.navbar}>
            <Container>
                <Link to="/">
                    <img src={logo} alt="Parallel" />
                </Link>

                <u className={styles.list}>
                    <li  className={styles.item}>
                        <Link to="/">Início</Link>
                    </li>
                    <li className={styles.item}>
                        <Link to="/comparacao">Comparação</Link>
                    </li>
                    <li className={styles.item}>
                        <Link to="/tecnologias">Tecnologias</Link>
                    </li>
                    <li className={styles.item}>
                        <Link to="/sobre">Sobre nós</Link>
                    </li>
                </u>
            </Container>
        </nav>)
}

export default Navbar