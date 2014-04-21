<div class="modal fade" id="insertModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title text-center" id="myModalLabel">Perguntas</h2>
            </div>
            <div class="modal-body">
                <form action="index" method="post">
                    <div class="form-group">
                        <h3>Idade</h3>
                        <div>
                            <input id="age1" name="age" type="radio" value="1">
                            <label for="age1">De 16 a 30 anos</label>
                        </div>
                        <div>
                            <input id="age2" name="age" type="radio" value="2">
                            <label for="age2">De 31 a 45 anos</label>
                        </div>
                        <div>
                            <input id="age3" name="age" type="radio" value="3">
                            <label for="age3">De 46 a 60 anos</label>
                        </div>
                        <div>
                            <input id="age4" name="age" type="radio" value="4">
                            <label for="age4">Acima de 60 anos</label>
                        </div>
                    </div>
                    <div class="form-group schooling">
                        <h3>Nível de escolaridade</h3>
                        <div>
                            <input id="schooling1" name="schooling" type="radio" value="1">
                            <label for="schooling1">Ensino fundamental incompleto</label>
                        </div>
                        <div>
                            <input id="schooling2" name="schooling" type="radio" value="2">
                            <label for="schooling2">Ensino fundamental completo</label>
                        </div>
                        <div>
                            <input id="schooling3" name="schooling" type="radio" value="3">
                            <label for="schooling3">Ensino médio completo</label>
                        </div>
                        <div>
                            <input id="schooling4" name="schooling" type="radio" value="4">
                            <label for="schooling4">Ensino superior completo</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <h3>Renda familiar</h3>
                        <div>
                            <input id="income1" name="income" type="radio" value="1">
                            <label for="income2">Abaixo de R$ 1.000</label>
                        </div>
                        <div>
                            <input id="income2" name="income" type="radio" value="2">
                            <label for="income2">De R$ 1.000 a R$ 3.000</label>
                        </div>
                        <div>
                            <input id="income3" name="income" type="radio" value="3">
                            <label for="income3">De R$ 3.000 a R$ 5.000</label>
                        </div>
                        <div>
                            <input id="income4" name="income" type="radio" value="4">
                            <label for="income4">De R$ 5.000 a R$ 7.000</label>
                        </div>
                        <div>
                            <input id="income5" name="income" type="radio" value="5">
                            <label for="income5">Acima de R$ 7.000</label>
                        </div>
                    </div>
                    <div class="form-group last">
                        <h3>Sexo</h3>
                        <div>
                            <input id="sex1" name="sex" type="radio" value="1">
                            <label for="sex1">Masculino</label>
                        </div>
                        <div>
                            <input id="sex2" name="sex" type="radio" value="2">
                            <label for="sex2">Feminino</label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <h3>Candidato</h3>
                        <div>
                            <input id="candidate1" name="candidate" type="radio" value="1">
                            <label for="candidate1">Barack Obama</label>
                        </div>
                        <div>
                            <input id="candidate2" name="candidate" type="radio" value="2">
                            <label for="candidate2">Dilma Rousseff</label>
                        </div>
                        <div>
                            <input id="candidate3" name="candidate" type="radio" value="3">
                            <label for="candidate3">Kim Jong-un</label>
                        </div>
                        <div>
                            <input id="candidate4" name="candidate" type="radio" value="4">
                            <label for="candidate4">Vladimir Putin</label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>