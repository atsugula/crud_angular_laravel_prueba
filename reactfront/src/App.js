import './App.css';

//Importamos lo que usamos
import { BrowserRouter, Routes, Route } from 'react-router-dom';

//importamos nuestra vista
import ShowTercero from './components/tercero/ShowTercero';
import CreateTercero from './components/tercero/CreateTercero';
import EditTercero from './components/tercero/EditTercero';

function App() {
  return (
    <div class="container-fluid">
      <div class="row">
        <BrowserRouter>
          <Routes>
            <Route path='/' element={ <ShowTercero/> } />
            <Route path='/create' element={ <CreateTercero/> } />
            <Route path='/tercero/:id' element={ <EditTercero/> } />
          </Routes>
        </BrowserRouter>
      </div>
    </div>
  );
}

export default App;
