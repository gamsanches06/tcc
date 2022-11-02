import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Home from './components/pages/Home';
import Tecno from './components/pages/Tecnologias';
import Sobre from './components/pages/Sobre';
import Comparacao from './components/pages/Comparacao';
import Spring from './components/pages/Spring';
import Symfony from './components/pages/Symfony';
import Node from './components/pages/Node';

import Container from './components/layout/Container';
import Navbar from './components/layout/Navbar';
import Footer from './components/layout/Footer';

function App() {
  return (

    <Router>
      <Navbar />
      <Container customClass="min-height">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="comparacao" element= {<Comparacao />}/>
          <Route path="tecnologias" element= {<Tecno />}/>
          <Route path="sobre" element= {<Sobre />}/>
          <Route path="spring" element= {<Spring />}/>
          <Route path="symfony" element= {<Symfony />}/>
          <Route path="node" element= {<Node />}/>
        </Routes>
      </Container>

      <Footer />
    </Router>
  );
}

export default App;
