package Model;


public class Usuario {
    
    private int idUsuarios;
    private String Nombres;
    private String Apellidos;
    private String Usuario;
    private String Contraseña;
    private String Correo;

    public Usuario() {
    }

    public Usuario(String Usuario, String Contraseña) {
        this.Usuario = Usuario;
        this.Contraseña = Contraseña;
    }

    public Usuario(String Nombres, String Apellidos, String Usuario, String Contraseña, String Correo) {
        this.Nombres = Nombres;
        this.Apellidos = Apellidos;
        this.Usuario = Usuario;
        this.Contraseña = Contraseña;
        this.Correo = Correo;
    }

    public Usuario(int idUsuarios, String Nombres, String Apellidos, String Usuario, String Contraseña, String Correo) {
        this.idUsuarios = idUsuarios;
        this.Nombres = Nombres;
        this.Apellidos = Apellidos;
        this.Usuario = Usuario;
        this.Contraseña = Contraseña;
        this.Correo = Correo;
    }

    public int getIdUsuarios() {
        return idUsuarios;
    }

    public String getNombres() {
        return Nombres;
    }

    public String getApellidos() {
        return Apellidos;
    }

    public String getUsuario() {
        return Usuario;
    }

    public String getContraseña() {
        return Contraseña;
    }

    public String getCorreo() {
        return Correo;
    }
    
    
    
}
