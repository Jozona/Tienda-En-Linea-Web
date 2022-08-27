/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package Controlador;

import com.google.gson.Gson;
import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;
import java.util.HashMap;

/**
 *
 * @author Jahir
 */
@WebServlet(name = "RevisarSesion", urlPatterns = {"/RevisarSesion"})
public class RevisarSesion extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
      HttpSession sesion = request.getSession();
      HashMap respuesta = new HashMap();
      
      if(sesion.getAttribute("idUsuario") != null){
          respuesta.put("respuesta", sesion.getAttribute("idUsuario"));
          
      }else{
          respuesta.put("respuesta", false);
      }
       String json = new Gson().toJson(respuesta);   
       PrintWriter out = response.getWriter();
       out.print(json);
       out.flush();
      
    }

}
