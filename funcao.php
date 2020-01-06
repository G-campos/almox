<?php /*Funções de echo*/
/*tela principal*/

function p_adm(){
  echo "<div class='container_trescolunas'> 
             <a href='principal.php'><h5><img src='imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a></h5><br>
      <!--coluna-1-->
              <div class='coluna1'>
                <a href='cautela/' >
                  <div class='button' style='background-color:red'>
                    <img src='imagens/cautela.jpg' class='img'/>
                    <p>REGISTRO DE EMPRESTIMO</p>
                  </div>    
                </a>
                <br>
                  <a href='aluno/'>
                    <div class='button' style='background-color:red'>
                      <img src='imagens/aluno.png' class='img'/>
                      <p>ALUNO</p>
                    </div>
                  </a>
                  <br>
                    <a href='erros.php'>
                      <div class='button' style='background-color:red'>
                        <img src='imagens/icone_grande/outline_settings_black_48dp.png' class='img'>
                        <p>RELATAR ERRO</p>
                      </div>
                    </a>      
                    </br>
                      <a href='#'>
                        <div class='button' style='background-color:red'>
                          <img src='imagens/icone_grande/baseline_feedback_black_24dp.png' class='img'/>
                          <p>ERRO RELATADO</p>
                        </div>
                      </a>      
              </div>
      <!--coluna-2-->
              <div class='coluna2'>
                <a href='cautela/devolucao.php'>
                  <div class='button' style='background-color:red'>
                    <img src='imagens/descautela.png' class='img'>
                    <p>DEVOLVER MATERIAL</p>
                  </div>  
                </a>        
                <br>
                  <a href='funcionario/'>
                    <div class='button' style='background-color:red'>
                      <img src='imagens/professor.jpg' class='img'>
                      <p>FUNCIONÁRIO</p> 
                    </div>
                  </a>
                    <br>
                    <a href='setor.php'>
                      <div class='button' style='background-color:red'>
                        <img src='imagens/icone_grande/outline_settings_ethernet_black_48dp.png' class='img'>
                        <p>CADASTRO DE SETOR</p> 
                      </div>  
                    </a>
              </div>
      <!--coluna-3-->
              <div class='coluna3'>
                <a href='class/logout.class.php'>
                  <div class='button' style='background-color:red'>
                    <img src='imagens/sair.ico' class='img'>
                    <p> SAIR</p>
                  </div>
                </a>            
                <br>
                  <a href='produtos/'>
                    <div class='button' style='background-color:red'>
                      <img src='imagens/produtos.jpg' class='img'>
                      <p>CAD DE MATERIAL</p> 
                    </div>
                  </a>  
                  <br> 
                    <a href='https://docs.google.com/forms/d/e/1FAIpQLSci-LbZibLpdB-71tHt7SY-nHh8cTyd0uEKQFjT-zlZx0WDCQ/viewform'>
                      <div class='button' style='background-color:red'>
                        <img src='imagens/icone_grande/baseline_note_add_black_48dp.png' class='img'>
                        <p>RESERVA DE LAB.</p>
                      </div>
                    </a>      
              </div>
            </div>";
}
  function p_funcionario(){
    echo "  <div class='container_trescolunas'> 
            <a href='principal.php'><h5><img src='imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a></h5><br>
      <!--coluna-1-->
              <div class='coluna1'>
                <a href='cautela/'>
                  <div class='button'>
                    <img src='imagens/cautela.jpg' class='img'/>
                    <p>Registro de emprestimo</p>
                  </div>    
                </a>
                <br>
                  <a href='aluno/'>
                    <div class='button'>
                      <img src='imagens/aluno.png' class='img'/>
                      <p>Aluno</p>
                    </div>
                  </a>
                  <br>
                    <a href='erros.php'>
                      <div class='button'>
                        <img src='imagens/icone_grande/outline_settings_black_48dp.png' class='img'>
                        <p>Relatar erros</p>
                      </div>
                    </a>      
              </div>
      <!--coluna-2-->
              <div class='coluna2'>
                <a href='devolucao.php'>
                  <div class='button'>
                    <img src='imagens/descautela.png' class='img'>
                    <p>Devolver material</p>
                  </div>  
                </a>        
                <br>
                  <a href='funcionario/'>
                    <div class='button'>
                      <img src='imagens/professor.jpg' class='img'>
                      <p>Funcionário</p> 
                    </div>
                  </a>
                  <br>
                      <a href='https://docs.google.com/forms/d/e/1FAIpQLSci-LbZibLpdB-71tHt7SY-nHh8cTyd0uEKQFjT-zlZx0WDCQ/viewform'>
                        <div class='button'>
                          <img src='imagens/icone_grande/baseline_note_add_black_48dp.png' class='img'>
                          <p>Reserva de Lab.</p>
                        </div>
                    </a>
              </div>
      <!--coluna-3-->
              <div class='coluna3'>
                <a href='class/logout.class.php'>
                  <div class='button'>
                    <img src='imagens/sair.ico' class='img'>
                    <p> Sair</p>
                  </div>
                </a>            
                <br>
                  <a href='produtos/'>
                    <div class='button'>
                      <img src='imagens/produtos.jpg' class='img'>
                      <p>Cad de produtos</p> 
                    </div>
                  </a>  
                  <br>      
              </div>
            </div>";
  }
    function p_aluno(){
      echo "  <div class='container_trescolunas'> 
            <a href='principal.php'><h5><img src='imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a></h5><br>
      <!--coluna-1-->
              <div class='coluna1'>
                <a href='cautela/cautela.php'>
                  <div class='button'>
                    <img src='imagens/cautela.jpg' class='img'>
                    <p>Registro de cautela</p>
                  </div>    
                </a>
                <br>    
              </div>
      <!--coluna-2-->
              <div class='coluna2'>
                <a href='erros.php'>
                      <div class='button'>
                        <img src='imagens/icone_grande/outline_settings_black_48dp.png' class='img'>
                        <p>Relatar erros</p>
                      </div>
                </a>    
                <br>
              </div>
      <!--coluna-3-->
              <div class='coluna3'>
                <a href='class/logout.class.php'>
                  <div class='button'>
                    <img src='imagens/sair.ico' class='img'>
                    <p> Sair</p>
                  </div>
                </a>            
                <br>
              </div>
            </div>";
    }
function p_professor(){
      echo "  <div class='container_trescolunas'> 
            <a href='principal.php'><h5><img src='imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a></h5><br>
      <!--coluna-1-->
              <div class='coluna1'>
                <a href='cautela/cautela.php'>
                  <div class='button'>
                    <img src='imagens/cautela.jpg' class='img'>
                    <p>Registro de cautela</p>
                  </div>    
                </a>
                <br> 
                    <a href='https://docs.google.com/forms/d/e/1FAIpQLSci-LbZibLpdB-71tHt7SY-nHh8cTyd0uEKQFjT-zlZx0WDCQ/viewform'>
                      <div class='button'>
                        <img src='imagens/icone_grande/baseline_note_add_black_48dp.png' class='img'>
                        <p>Reserva de Lab.</p>
                      </div>
                    </a>       
              </div>
      <!--coluna-2-->
              <div class='coluna2'>
                <a href='erros.php'>
                      <div class='button'>
                        <img src='imagens/icone_grande/outline_settings_black_48dp.png' class='img'>
                        <p>Relatar erros</p>
                      </div>
                </a>    
                <br>
              </div>
      <!--coluna-3-->
              <div class='coluna3'>
                <a href='class/logout.class.php'>
                  <div class='button'>
                    <img src='imagens/sair.ico' class='img'>
                    <p> Sair</p>
                  </div>
                </a>            
                <br>
              </div>
            </div>";
    }
/*aluno*/
function menualuno(){
      
     }

function cad_aluno(){
        echo "<div class='conteiner'>
              <form method='post' name='cad_aluno'>
                <a href='../principal.php'><h5><img src='../imagens/logo.jpg' class='avatar_sobre'>CEEP ALMOX</a><a href='index.php'> > ALUNOS</a><a href='cad_aluno.php'> > CADASTRO DE ALUNOS</h5></a>
                      <div class='header'>
                          <a href='../aluno'>
                            <button type='button'>
                              <img src='../imagens/home.ico' class='img'/>Home
                            </button> 
                          </a>
                            <button onClick='verificarSenhas()'>
                              <img src='../imagens/arquivar.ico' class='img'>Salvar
                            </button>              
                      </div>
                    <div class='row'>
                      <div class='col s12'>
                        <label> Nome </label> <br> 
                        <input name='nome' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                      </div>               
                      <div class='col s4'>
                          <label> CGM - Somente números:</label> 
                          <input name='cgm' type='number' required maxlength='9' minlength='9'>
                      </div>
                        <div class='col s4'>
                            <label> Data de Nascimento:</label>
                            <input type='date' name='dn'>
                        </div>
                    </div>
                      <br class='limpa'>
                    <div class='row'>
                      <div class='col s4'>
                        <label>Selecione o curso</label><br><br>
                          <select name='curso' class='bg_color'>
                            <option value='1'>Administração</option>
                            <option value='2'>Edificações</option>
                            <option value='3'>Eletrônica</option>
                            <option value='4'>Eletromecânica</option>
                            <option value='5'>Enfermagem</option>
                            <option value='6'>Especialização Enfermagem</option>
                            <option value='7'>Informática</option>
                            <option value='8'>Meio Ambiente</option>
                            <option value='9'>Segurança do Trabalho</option>
                          </select>
                      </div>
                        <div class='col s4'>
                          <label>Selecione o turno</label><br><br>
                          <select name='turno' class='bg_color'>
                            <option value='1'>Manhã</option>
                            <option value='2'>Tarne</option>
                            <option value='3'>Noite</option>
                          </select>
                        </div>
                          <div class='col s4'>
                            <label>Selecione o Ano/Semestre</label><br><br>
                              <select name='turma' class='bg_color'>
                                <option value='1'>1ºano</option>
                                <option value='2'>2ºano</option>
                                <option value='3'>3ºano</option>
                                <option value='4'>4ºano</option>
                                <option value='5'>1ºsemestre</option>
                                <option value='6'>2ºsemestre</option>
                                <option value='7'>3ºsemestre</option>
                                <option value='8'>4ºsemestre</option>
                              </select>
                          </div>    
                    </div>
                      <br class='limpa'>
                    <div class='row'>
                      <div class='col s6'>
                        <label for='psw'>Senha</label>
                        <input type='password' name='senha' required><br>
                      </div>
                        <div class='col s6'>
                          <label for='confirme'>Confirme a senha</label>
                          <input type='password' name='confirme_senha' required>
                        </div>
                    </div>
                  </form>
              </div>";
                   }
      function lista_aluno(){

      }
/*professor*/
  function menufuncionario (){

  }

    function cad_funcionario(){
      echo "<div class='conteiner'>
                    <form method='post'>
                           <div class='conteiner'>
                               <h3><img src='../imagens/professor.jpg' alt='Logo' class='avatar'>Cadastro de Funcionário</h3><br>
                                  <div class='header'>
                                    <a href='../funcionario'>
                                      <button type='button'>
                                        <img src='../imagens/home.ico' class='img'/>Home
                                      </button> 
                                    </a>
                                      <button onClick='verificarSenhas()'>
                                        <img src='../imagens/arquivar.ico' class='img'>Salvar
                                      </button>              
                                  </div>
                            <div class='row'>
                                  
                                <div class='col s6'>
                                  <label> Nome </label> <br> 
                                  <input name='nome' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                                </div>              
                                <div class='col s6'>
                                  <label> Sobrenome </label> <br> 
                                  <input name='sobrenome' type='text' required pattern='[A-Z][a-z]{,20}'>
                                </div> 
                                  <div class='col s4'>
                                     <p>
                                        <label>Função</label><br>
                                        <label>
                                          <input name='funcao' value='3' type='radio' checked />
                                          <span>Funcionário / Professor</span>
                                        </label>
                                     </p>
                                        <p>
                                          <label>
                                            <input name='funcao' value='2' type='radio' />
                                            <span>Laboratorista</span>
                                          </label>
                                         </p>
                                  </div>
                                      <div class='col s4'>
                                        <label>Setor</label>
                                        <select name='setor' class='bg_color'>
                                          <option value='2'>Sala de Aula</option>
                                          <option value='3'>Almoxarifado</option>
                                          <option value='4'>Central de Materiais</option>
                                          <option value='5'>Laboratórios de Informatica</option>
                                        </select>
                                      </div>
                            </div>
                         <br class='limpa'>
                         <div class='row'>
                            <div class='col s6'>
                              <label for='senha'>Senha</label>
                              <input type='password' name='senha' required><br>
                            </div>
                            <div class='col s6'>
                              <label for='confirme'>Confirme a senha</label>
                              <input type='password' name='confirme' required>
                            </div>
                          </div>
                        
                    </form>
                  </div>";
    }
      function lista_professor(){

      }

/*produto*/
   function menuproduto (){

  }

    function cad_produto(){
      echo "  
            <div class='conteiner'>
              <form method='post'>
                <div class='conteiner'>
                              <h3><img src='../imagens/produtos.jpg' alt='Logo' class='avatar'>Cadastro de Produtos</h3><br>
                            <div class='header'>
                              <a href='../produtos'>
                                <button type='button'>
                                  <img src='../imagens/home.ico' class='img'/>Home
                                </button> 
                              </a>
                                  <button>
                                      <img src='../imagens/arquivar.ico' class='img'>Salvar
                                    </button>              
                            </div>
                    <div class='row'>                  
                              <div class='col s6'>
                                <label>Produto</label><br> 
                                <input name='nome' type='text' required autofocus='true' pattern='[A-Z][a-z]{,25}''>
                              </div>                                          
                                    <div class='col s3'>                    
                                          <label>Quantidade</label><br>
                                          <input name='qtd' type='number' required pattern='[1-9]{,30}'>                         
                                    </div>
                                      <div class='col s3'>
                                          <label>Tipo de Unidade</label>
                                          <select name='un' class='bg_color'>
                                            <option value='un'>Unidade</option>
                                            <option value='pc'>Peça</option>
                                            <option value='cx'>Caixa</option>
                                            <option value='mt'>Metro</option>
                                          </select>
                                        </div>
                                      <div class='col s8'>
                                        <label>Marca</label><br> 
                                        <input name='marca' type='text' required pattern='[A-Z][a-z]{,25}'>
                                      </div> 
                                        <div class='col s4'>                    
                                            <label>Valor</label><br>
                                            <input name='valor' id='money' type='number' required pattern='[1-9]{,30}'>                         
                                        </div>
                                          <div class='s12'>
                                              <label>Observações:</label><br>
                                              <textarea name='obs' type='textarea' required pattern='[A-Z][a-z][1-9]{,100}'></textarea> 
                                        </div>
                    </div>               
              </form>
          </div>";
    }
      function lista_produto(){

      }

/*cautela*/
function menucautela (){
     	echo "<div class='container_trescolunas'>
			<!--coluna-1-->
							<div class='coluna1'>
								<a href='../principal.php'>
									<div class='button'>
										<img src='../imagens/icone_grande/baseline_home_black_48dp.png' class='img'>
										<p>Home</p>
									</div> 		
								</a>
							</div>
			<!--coluna-2-->
							<div class='coluna2'>
									<a href='cautela.php'>
										<div class='button'>
											<img src='../imagens/' class='img'>
											<p>Registar emprestimo</p>
										</div>
									</a>	
							</div>
			<!--coluna-3-->
							<div class='coluna3'>
								<a href='reserva.php'>
									<div class='button'>
										<img src='../imagens/icone_grande/outline_list_alt_black_48dp.png' class='img'>
										<p>Emprestimos</p>
									</div> 		
								</a>
							</div>
						</div>";
}
function modal_devolucao(){
      echo " ";
        }
function relatar_erros(){
  echo "<div class='conteiner'>
                          <form method='post'>
                            <div class='conteiner'>
                              <h3><img src='imagens/icone_grande/outline_settings_black_48dp.png' alt='Logo' class='avatar'>Relatar erros</h3><br>
                            <div class='header'>
                              <a href='principal.php'>
                                <button type='button'>
                                  <img src='imagens/home.ico' class='img'/>Home
                                </button> 
                              </a>
                                  <button>
                                      <img src='imagens/arquivar.ico' class='img'>Enviar
                                    </button>              
                            </div>
                    <div class='row'>
                      <div class='col s4'>
                        <label> Nome </label> <br> 
                        <input name='nome' type='text' required autofocus='true' pattern='[A-Z][a-z]{,20}'>
                      </div>  
                        <div class='col s4'>
                              <label> Assunto:</label>
                              <input name='assunto' type='text' required pattern='[A-Z][a-z]{,20}'>
                        </div>            
                          <div class='col s4'>
                            <label>Setor</label>
                              <select name='setor' class='bg_color'>
                                <option value=''>Sala de Aula</option>
                                <option value=''>Almoxarifado</option>
                                <option value=''>Central de Máteriais</option>
                                <option value=''>Laboratórios de Informatica</option>
                                <option value=''>Laboratório de Quimica/física</option>
                                <option value=''>Laboratório de Eletricidade</option>
                                <option value=''>Laboratório de Eletrônica</option>
                                <option value=''>Laboratório de Enfermagem</option>
                                <option value=''>Laboratório de Mecânica</option>
                              </select>
                          </div>
                    </div>
                      <br class='limpa'>
                    <div class='row'>
                      <div class='s12'>
                        <label>Descrição do erro:</label><br>
                        <textarea name='descricao_erro' type='textarea' required pattern='[1-9]{,100}'></textarea> 
                      </div>
                    </div>
                  </form>
                  </div>";
}
?>