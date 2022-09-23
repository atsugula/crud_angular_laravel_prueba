import React, {useState,useEffect} from 'react'
import axios from 'axios'
import Select from 'react-select'
import $ from 'jquery'

import { Link,useNavigate, useParams } from 'react-router-dom';

//Hacemos referencia a nuestra API
const endPoint = 'http://localhost:8000/api'

const EditTercero = () => {

    const [numero_identificacion, setNumero_identificacion] = useState('')
    const [nombre1, setNombre1] = useState('')
    const [nombre2, setNombre2] = useState('')
    const [apellido1, setApellido1] = useState('')
    const [apellido2, setApellido2] = useState('')
    const [departamento_id, setDepartamento_id] = useState(0)
    const [ciudad_id, setCiudad_id] = useState(0)
    const [tipo_tercero_id, setTipo_tercero_id] = useState(0)
    const [tipo_contribuyente_id, setTipo_contribuyente_id] = useState(0)
    const [tipo_identificacion_id, setTipo_identificacion_id] = useState(0)
    const navigate = useNavigate()

    //Traemos el id
    const {id} = useParams()

    //Creamos nuestro hub
    const [ identificaciones, setIdentificaciones ]= useState([])
    const [ contribuyentes, setContribuyentes ]= useState([])
    const [ terceros, setTerceros ]= useState([])
    const [ ciudades, setCiudades ]= useState([])
    const [ departamentos, setDepartamentos ]= useState([])

    const getTipos = async (tipo) => {
        const response = await axios.get(`${endPoint}/tipoElemento/${tipo}`)
        //Dependiendo del tipo llenamos el select
        switch (tipo){
            case 'tipo_identificacion':
                setIdentificaciones(response.data)
                break;
            case 'tipo_contribuyente':
                setContribuyentes(response.data)
                break;
            case 'tipo_tercero':
                setTerceros(response.data)
                break;
            case 'ciudad':
                setCiudades(response.data)
                break;
            case 'departamento':
                setDepartamentos(response.data)
                break;
            default:
                console.log('Ups! Parece que no tenemos nada registrado');
        }
    }
    //Llenamos los selects
    useEffect ( () => {
        const getTerceroById = async () => {
            const response = await axios.get(`${endPoint}/tercero/${id}`)
            setNumero_identificacion(response.data.numero_identificacion)
            setNombre1(response.data.nombre1)
            setNombre2(response.data.nombre2)
            setApellido1(response.data.apellido1)
            setApellido2(response.data.apellido2)
            setDepartamento_id(response.data.departamento_id)
            setCiudad_id(response.data.ciudad_id)
            setTipo_tercero_id(response.data.tipo_tercero_id)
            setTipo_contribuyente_id(response.data.tipo_contribuyente_id)
            setTipo_identificacion_id(response.data.tipo_identificacion_id)
        }
        getTerceroById()
        getTipos('tipo_identificacion')
        getTipos('tipo_contribuyente')
        getTipos('tipo_tercero')
        getTipos('ciudad')
        getTipos('departamento')
    }, [])
    const update = async (e) => {
        e.preventDefault()
        await axios.put(`${endPoint}/tercero/${id}`, {
            numero_identificacion: numero_identificacion,
            nombre1: nombre1,
            nombre2: nombre2,
            apellido1: apellido1,
            apellido2: apellido2,
            departamento_id: departamento_id,
            ciudad_id: ciudad_id,
            tipo_tercero_id: tipo_tercero_id,
            tipo_contribuyente_id: tipo_contribuyente_id,
            tipo_identificacion_id: tipo_identificacion_id
        })
        navigate('/')
    }
    return (
        <div className='col-12'>
            <br></br>
            <div className='card'>
                <div className='card-header'>
                    <div className='d-grid gap-2'>
                        <Link to="/" className='btn btn-primary btn-lg mt-2 mb-2 text-white'>Atrás</Link>
                    </div>
                    <div className='card-body'>
                        <div class="box box-info padding-1">
                            <div class="box-body">
                                <form onSubmit={update}>                                    
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Departamento:</label>
                                                <Select 
                                                    name='departamento_id'
                                                    placeholder="Seleccione una opción"
                                                    value={departamentos.map(sup => ({label:sup.nombre, value:sup.id})).find(e => e.value === departamento_id)}
                                                    onChange={ (e) => setDepartamento_id(e.value) }
                                                    options={departamentos.map(sup => ({label:sup.nombre, value:sup.id}))} />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                        <div class="form-group">
                                                <label className="form-label">Ciudad o municipio:</label>
                                                <Select 
                                                    name='ciudad_id'
                                                    placeholder="Seleccione una opción"
                                                    value={ciudades.map(sup => ({label:sup.nombre, value:sup.id})).find(e => e.value === ciudad_id)}
                                                    onChange={ (e) => setCiudad_id(e.value) }
                                                    options={ciudades.map(sup => ({label:sup.nombre, value:sup.id}))} />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Tipo contribuyente:</label>
                                                <Select 
                                                    name='tipo_contribuyente_id'
                                                    placeholder="Seleccione una opción"
                                                    value={contribuyentes.map(sup => ({label:sup.nombre, value:sup.id})).find(e => e.value === tipo_contribuyente_id)}
                                                    onChange={ (e) => setTipo_contribuyente_id(e.value) }
                                                    options={contribuyentes.map(sup => ({label:sup.nombre, value:sup.id}))} />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                        <div class="form-group">
                                                <label className="form-label">Tipo tercero:</label>
                                                <Select 
                                                    name='tipo_tercero_id'
                                                    placeholder="Seleccione una opción"
                                                    value={terceros.map(sup => ({label:sup.nombre, value:sup.id})).find(e => e.value === tipo_tercero_id)}
                                                    onChange={ (e) => setTipo_tercero_id(e.value) }
                                                    options={terceros.map(sup => ({label:sup.nombre, value:sup.id}))} />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Tipo identificación:</label>
                                                <Select 
                                                    name={tipo_identificacion_id}
                                                    placeholder="Seleccione una opción"
                                                    value={identificaciones.map(sup => ({label:sup.nombre, value:sup.id})).find(e => e.value === tipo_identificacion_id)}
                                                    onChange={ (e) => setTipo_identificacion_id(e.value) }
                                                    options={identificaciones.map(sup => ({label:sup.nombre, value:sup.id}))} />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Número identificación:</label>
                                                <input className='form-control'
                                                    name={numero_identificacion}
                                                    value={numero_identificacion}
                                                    onChange={ (e) => setNumero_identificacion(e.target.value) }
                                                    type="number" min='1000'/>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Primer nombre:</label>
                                                <input className='form-control'
                                                    name={nombre1}
                                                    value={nombre1}
                                                    onChange={ (e) => setNombre1(e.target.value) }
                                                    type="text"/>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Segundo nombre:</label>
                                                <input className='form-control'
                                                    name={nombre2}
                                                    value={nombre2}
                                                    onChange={ (e) => setNombre2(e.target.value) }
                                                    type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Primer apellido:</label>
                                                <input className='form-control'
                                                    name={apellido1}
                                                    value={apellido1}
                                                    onChange={ (e) => setApellido1(e.target.value) }
                                                    type="text"/>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label className="form-label">Segundo apellido:</label>
                                                <input className='form-control'
                                                    name={apellido2}
                                                    value={apellido2}
                                                    onChange={ (e) => setApellido2(e.target.value) }
                                                    type="text"/>
                                            </div>
                                        </div>
                                    </div>                                                                      
                                    <div class="box-footer mt20">
                                        <button type="submit" class="btn btn-primary btn-lg mt-2 mb-2 text-white">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default EditTercero