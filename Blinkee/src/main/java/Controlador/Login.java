/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package Controlador;

import DAO.UsuarioDAO;
import Model.Usuario;
import com.google.gson.Gson;
import jakarta.servlet.http.HttpSession;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.HashMap;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

/**
 *
 * @author Jahir
 */
@WebServlet(name = "Login", urlPatterns = {"/Login"})
public class Login extends HttpServlet {

     @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
       HashMap resultado = new HashMap();
       HttpSession sesion;
       UsuarioDAO userDao = new UsuarioDAO();
       String usuario = request.getParameter("usuario");
       String contraseña = request.getParameter("contraseña");
       
       Usuario user = new Usuario(usuario, contraseña);
       
       userDao.identificar(user);
       
       Usuario repuestaUsuario = userDao.identificar(user);
       
       if(repuestaUsuario != null){
           sesion = request.getSession();
           sesion.setAttribute("idUsuario", repuestaUsuario);
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
