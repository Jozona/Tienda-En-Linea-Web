package Model;

public class Producto {
    private int idProductos;
    private String NombrePro;
    private String Descripcion;
    private int Precio;
    private int Vistas;
    private String Categoria;
    private int Valoracion;
    private String Imagen;

    public Producto() {
    }

    public Producto(int idProductos, String NombrePro, String Descripcion, int Precio, int Vistas, String Categoria, int Valoracion, String Imagen) {
        this.idProductos = idProductos;
        this.NombrePro = NombrePro;
        this.Descripcion = Descripcion;
        this.Precio = Precio;
        this.Vistas = Vistas;
        this.Categoria = Categoria;
         this.Valoracion = Valoracion;
        this.Imagen = Imagen;
    }

    public Producto(String NombrePro, String Descripcion, int Precio, String Imagen) {
        this.NombrePro = NombrePro;
        this.Descripcion = Descripcion;
        this.Precio = Precio;
        this.Imagen = Imagen;
    }

    public int getIdProductos() {
        return idProductos;
    }

    public String getNombrePro() {
        return NombrePro;
    }

    public String getDescripcion() {
        return Descripcion;
    }

    public int getPrecio() {
        return Precio;
    }

    public String getImagen() {
        return Imagen;
    }

    public int getVistas() {
        return Vistas;
    }
    
    
}
