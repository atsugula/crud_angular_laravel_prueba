import React, {useEffect, useState} from 'react'
import axios from 'axios'

import {Link} from 'react-router-dom'

import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'

const MySwal = withReactContent(Swal)

//Hacemos referencia a nuestra API
const endPoint = 'http://localhost:8000/api'

const ShowTercero = () => {
    //Creamos nuestro hub
    const [ terceros, setTerceros ]= useState([])

    useEffect ( () => {
        getAllTerceros()
    }, [])
    const getAllTerceros = async () => {
        const response = await axios.get(`${endPoint}/terceros`)
        setTerceros(response.data)
    }
    const destroyTerceros = async (id) => {
        //Mensaje confirmar antes
        Swal.fire({
            title: '¿Está seguro de eliminar esto?',
            text: "No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, elimina esto!'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    await axios.delete(`${endPoint}/tercero/${id}`)
                    getAllTerceros()
                }
        })        
    }
    
    return (
        <div className='col-12'>
            <br></br>
            <div className='card'>
                <div className='card-header'>
                    <div className='d-grid gap-2'>
                        <Link to="/create" className='btn btn-primary btn-lg mt-2 mb-2 text-white'>Crear</Link>
                    </div>
                    <div className='card-body'>
                        <div className="table-responsive">
                            <table className='table table-striped table-hover'>
                                <thead className='thead'>
                                <tr>
                                    <th>Departamento</th>                            
                                    <th>Municipio</th>
                                    <th colSpan={2} className='text-center'>Identificación</th>
                                    <th>Nombres</th>
                                    <th>Tipo tercero</th>

                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    { terceros.map( (tercero) => (
                                        <tr key={tercero.id}>
                                            <td>{tercero.departamento_id}</td>
                                            <td>{tercero.ciudad_id}</td>
                                            <td>{tercero.tipo_identificacion_id}</td>
                                            <td>{tercero.numero_identificacion}</td>
                                            <td>{tercero.nombre1}</td>
                                            <td>{tercero.tipo_contribuyente_id}</td>
                                            <td>
                                                <Link to={`/tercero/${tercero.id}`} className='btn btn-warning btn-sm text-white'>Editar</Link>
                                                <span> </span>
                                                <button onClick={ () =>destroyTerceros(tercero.id) } className='btn btn-danger btn-sm'>Eliminar</button>
                                            </td>
                                        </tr>
                                    )) }
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    )
}

export default ShowTercero