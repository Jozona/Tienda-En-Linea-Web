
package DAO;

import Config.Conexion;
import Model.Producto;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;


public class ProductoDAO {
   Conexion cn = new Conexion();
   Connection con;
   PreparedStatement ps;
   ResultSet rs;
   Producto producto;
   
   public List todos(){
       ArrayList<Producto> list = new ArrayList();
       String sql = "SELECT * from productos order by precio ASC;";
       try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while(rs.next()){
                Producto tempProd = new Producto(rs.getInt("idProductos"), rs.getString("NombrePro"), rs.getString("Descripcion"), rs.getInt("Precio"), rs.getInt("Vistas"), rs.getString("Categoria"), rs.getInt("Valoracion"),rs.getString("Imagen"));
                list.add(tempProd);
            }
       }catch(Exception ex){
           System.out.println(ex);
       }
       return list;
   }
   
    public List vistas(){
       ArrayList<Producto> list = new ArrayList();
       String sql = "SELECT * from productos order by vistas DESC LIMIT 9;";
       try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while(rs.next()){
                Producto tempProdV = new Producto(rs.getInt("idProductos"), rs.getString("NombrePro"), rs.getString("Descripcion"), rs.getInt("Precio"), rs.getInt("Vistas"), rs.getString("Categoria"), rs.getInt("Valoracion"),  rs.getString("Imagen"));
                list.add(tempProdV);
            }
       }catch(Exception ex){
           System.out.println(ex);
       }
       return list;
   }
    
    public List random(){
       ArrayList<Producto> list = new ArrayList();
       String sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 12;";
       try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while(rs.next()){
                Producto tempProdR = new Producto(rs.getInt("idProductos"), rs.getString("NombrePro"), rs.getString("Descripcion"), rs.getInt("Precio"), rs.getInt("Vistas"), rs.getString("Categoria"), rs.getInt("Valoracion"), rs.getString("Imagen"));
                list.add(tempProdR);
            }
       }catch(Exception ex){
           System.out.println(ex);
       }
       return list;
   }
    
    
      public Producto identificar(String _id){
       String sql = "SELECT * FROM productos WHERE idProductos = "+ _id +";";
        try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            if(rs.next()){
                producto = new Producto(rs.getInt("idProductos"), rs.getString("NombrePro"), rs.getString("Descripcion"), rs.getInt("Precio"), rs.getInt("Vistas"), rs.getString("Categoria"), rs.getInt("Valoracion"), rs.getString("Imagen"));
            }

        }catch(Exception ex){
            System.out.println("Error" + ex);
        }
        return producto;
   }
      
       public List identificarC(String _cat){
       ArrayList<Producto> list = new ArrayList();
       String sql = "SELECT * FROM productos WHERE Categoria LIKE '%"+ _cat +"%';";
       try{
            con = cn.getConnection();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            while(rs.next()){
                Producto tempProdR = new Producto(rs.getInt("idProductos"), rs.getString("NombrePro"), rs.getString("Descripcion"), rs.getInt("Precio"), rs.getInt("Vistas"), rs.getString("Categoria"), rs.getInt("Valoracion"), rs.getString("Imagen"));
                list.add(tempProdR);
            }
       }catch(Exception ex){
           System.out.println(ex);
       }
       return list;
   }
    
}
