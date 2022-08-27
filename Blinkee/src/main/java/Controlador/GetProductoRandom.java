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
@WebServlet(name = "GetProductoRandom", urlPatterns = {"/GetProductoRandom"})
public class GetProductoRandom extends HttpServlet {

     @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        HashMap resultado = new HashMap();
        ProductoDAO productoDao = new ProductoDAO();
        resultado.put("productos", productoDao.random());
        
        String json = new Gson().toJson(resultado);
        PrintWriter out = response.getWriter(); 
        out.print(json);
        out.flush();
    }


}
