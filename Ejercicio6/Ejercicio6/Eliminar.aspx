<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Eliminar.aspx.cs" Inherits="Ejercicio6.Eliminar" %>

<!DOCTYPE html>

<html lang="en">

<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Estudiantes</title>
    <style>
        /* Estilo para la tabla */
        .styled-table {
            width: 50%; /* Ancho de la tabla */
            margin: 20px 0;
            font-size: 12px; /* Tamaño de fuente más pequeño */
            border-collapse: collapse;
            text-align: left;
        }

        /* Estilo para las filas de la tabla */
        .styled-table th,
        .styled-table td {
            padding: 6px; /* Espaciado interno más pequeño */
            border-bottom: 1px solid #ddd;
        }

        /* Estilo para las filas alternas (para un mejor contraste) */
        .styled-table tr:nth-child(even) {
            background-color: #a8e2a1;
        }

        /* Estilo para las filas al pasar el mouse por encima */
        .styled-table tr:hover {
            background-color: #f4f4f4;
        }

        /* Estilo para los botones enlaces */
        .boton-enlace {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <form id="form1" runat="server">
        <div>
            <asp:GridView ID="GridViewEstudiantes" runat="server" AutoGenerateColumns="False" CssClass="styled-table"
                OnRowCommand="GridViewEstudiantes_RowCommand">
                <Columns>
                    <asp:BoundField DataField="EstudianteCI" HeaderText="EstudianteCI" SortExpression="EstudianteCI" />
                    <asp:BoundField DataField="Nombre" HeaderText="Nombre" SortExpression="Nombre" />
                    <asp:BoundField DataField="Apellido" HeaderText="Apellido" SortExpression="Apellido" />
                    <asp:BoundField DataField="Genero" HeaderText="Genero" SortExpression="Genero" />
                    <asp:BoundField DataField="Departamento" HeaderText="Departamento" SortExpression="Departamento" />
                    <asp:BoundField DataField="Semestre" HeaderText="Semestre" SortExpression="Semestre" />
                    <asp:BoundField DataField="Materia" HeaderText="Materia" SortExpression="Materia" />
                    <asp:BoundField DataField="Nota" HeaderText="Nota" SortExpression="Nota" />
                    
                    <asp:TemplateField HeaderText="Modificar">
                        <ItemTemplate>
                            <asp:LinkButton ID="btnModificar" runat="server" CommandName="Modificar" CommandArgument='<%# Eval("EstudianteCI") %>' Text="Modificar" CssClass="boton-enlace" />
                        </ItemTemplate>
                    </asp:TemplateField>
                    
                    <asp:TemplateField HeaderText="Eliminar">
                        <ItemTemplate>
                            <asp:LinkButton ID="btnEliminar" runat="server" CommandName="Eliminar" CommandArgument='<%# Eval("EstudianteCI") %>' Text="Eliminar" CssClass="boton-enlace" />
                        </ItemTemplate>
                    </asp:TemplateField>
                </Columns>
            </asp:GridView>
            <a href="Default.aspx" class="boton-enlace">Atras</a>
        </div>
    </form>
</body>

</html>
