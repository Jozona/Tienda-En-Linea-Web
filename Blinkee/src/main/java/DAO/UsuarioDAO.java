/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package DAO;

import Config.Conexion;
import Model.Usuario;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class UsuarioDAO {
   Conexion cn = new Conexion();
   Connection con;
   PreparedStatement ps;
   ResultSet rs;
   Usuario usuario;
   
   
   public boolean agregar(Usuario user){
      String sql = "INSERT INTO usuarios (Nombres,Apellidos,Usuario,Contraseña,Correo) VALUES  ('"+ user.getNombres() +"','"+ user.getApellidos() +"','"+ user.getUsuario() +"','"+ user.getContraseña() +"','"+ user.getCorreo() +"')";
      try{
          con = cn.getConnection();
          ps = con.prepareStatement(sql);        
          int resultado = ps.executeUpdate();
          if(resultado > 0){
              return true;
          }else{
              return false;
          }
          
      }catch(Exception ex){
          System.out.println("Error" + ex);
          return false;
      }
   }
   
    public Usuario identificar(Usuario _user){
       String sql = "SELECT * FROM usuarios WHERE Usuario = '"+ _user.getUsuario().trim() +"' AND Contraseña = '"+ _user.getContraseña().trim() +"';";
        try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            if(rs.next()){
                usuario = new Usuario(rs.getInt("idUsuarios"), rs.getString("Nombres"), rs.getString("Apellidos"), rs.getString("Usuario"), rs.getString("Contraseña"), rs.getString("Correo"));
            }

        }catch(Exception ex){
            System.out.println("Error" + ex);
        }
        return usuario;
   }
}
