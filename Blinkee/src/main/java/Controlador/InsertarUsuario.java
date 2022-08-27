/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package Controlador;

import DAO.UsuarioDAO;
import Model.Usuario;
import com.google.gson.Gson;
import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.util.HashMap;

/**
 *
 * @author Jahir
 */
@WebServlet(name = "InsertarUsuario", urlPatterns = {"/InsertarUsuario"})
public class InsertarUsuario extends HttpServlet {
@Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        HashMap resultado = new HashMap();
        UsuarioDAO userDao = new UsuarioDAO();
        
        String nombre = request.getParameter("nombres");
        String apellido = request.getParameter("apellidos");
        String email = request.getParameter("email");
        String usuario = request.getParameter("usuario");
        String contrasenia = request.getParameter("contrasenia");
        
        Usuario user = new Usuario(nombre, apellido, usuario, contrasenia, email);
        
        if(userDao.agregar(user)){
            resultado.put("resultado", true);
        }else{
            resultado.put("resultado", false);
        }
        
        String json = new Gson().toJson(resultado);
        
        PrintWriter out = response.getWriter();
        
        out.print(json);
        out.flush();
    }

}
