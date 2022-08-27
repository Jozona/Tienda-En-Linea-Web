/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package Controlador;

import DAO.ProductoDAO;
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
@WebServlet(name = "GetProductoCat", urlPatterns = {"/GetProductoCat"})
public class GetProductoCat extends HttpServlet {

   
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        HashMap resultado = new HashMap();
        ProductoDAO productoDao = new ProductoDAO();
        String cat = request.getParameter("catProducto");
        resultado.put("productosC", productoDao.identificarC(cat));
        
        String json = new Gson().toJson(resultado);
        PrintWriter out = response.getWriter(); 
        out.print(json);
        out.flush();
    }

   
}
