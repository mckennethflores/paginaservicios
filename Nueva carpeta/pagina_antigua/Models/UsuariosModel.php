<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strDni;
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intTipoId;
		private $intStatus;
		private $strRuc;
		private $strRazSocial;
		private $strDirFiscal;

		

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $dni, string $nombre, string $apellido, int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->strDni = $dni;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM persona WHERE 
					email_user = '{$this->strEmail}' or dni = '{$this->strDni}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO persona(dni,nombres,apellidos,telefono,email_user,password,rolid,status) 
								  VALUES(?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strDni,
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectUsuarios()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and p.idpersona != 1 ";
			}

			$sql = "SELECT p.idpersona,p.dni,p.nombres,p.apellidos,p.telefono,p.email_user,p.status,r.idrol,r.nombrerol 
					FROM persona p 
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.status != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectUsuario(int $idpersona){
			$this->intIdUsuario = $idpersona;
			$sql = "SELECT p.idpersona,p.dni,p.nombres,p.apellidos,p.telefono,p.email_user,p.ruc,p.razonsocial,p.direccionfiscal,r.idrol,r.nombrerol,p.status, DATE_FORMAT(p.datecreated, '%d-%m-%Y') as fechaRegistro 
					FROM persona p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.idpersona = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario, string $dni, string $nombre, string $apellido, int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;
			$this->strDni = $dni;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM persona WHERE (email_user = '{$this->strEmail}' AND idpersona != $this->intIdUsuario)
										  OR (dni = '{$this->strDni}' AND idpersona != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE persona SET dni=?, nombres=?, apellidos=?, telefono=?, email_user=?, password=?, rolid=?, status=? 
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strDni,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE persona SET dni=?, nombres=?, apellidos=?, telefono=?, email_user=?, rolid=?, status=? 
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strDni,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdpersona)
		{
			$this->intIdUsuario = $intIdpersona;
			$sql = "UPDATE persona SET status = ? WHERE idpersona = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		public function updatePerfil(int $idUsuario, string $dni, string $nombre, string $apellido, int $telefono, string $password){
			$this->intIdUsuario = $idUsuario;
			$this->strDni = $dni;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strPassword = $password;

			if($this->strPassword != "")
			{
				$sql = "UPDATE persona SET dni=?, nombres=?, apellidos=?, telefono=?, password=? 
						WHERE idpersona = $this->intIdUsuario ";
				$arrData = array($this->strDni,
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono,
								$this->strPassword);
			}else{
				$sql = "UPDATE persona SET dni=?, nombres=?, apellidos=?, telefono=? 
						WHERE idpersona = $this->intIdUsuario ";
				$arrData = array($this->strDni,
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono);
			}
			$request = $this->update($sql,$arrData);
		    return $request;
		}

		public function updateDataFiscal(int $idUsuario, string $strRuc, string $strRazSocial, string $strDirFiscal){
			$this->intIdUsuario = $idUsuario;
			$this->strRuc = $strRuc;
			$this->strRazSocial = $strRazSocial;
			$this->strDirFiscal = $strDirFiscal;
			$sql = "UPDATE persona SET ruc=?, razonsocial=?, direccionfiscal=? 
						WHERE idpersona = $this->intIdUsuario ";
			$arrData = array($this->strRuc,
							$this->strRazSocial,
							$this->strDirFiscal);
			$request = $this->update($sql,$arrData);
		    return $request;
		}
	}
 ?>