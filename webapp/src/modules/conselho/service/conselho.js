import * as service from '../../shared/service/base/index';
/* eslint-disable import/prefer-default-export */

export const enviarDadosConselho = conselho => service.postRequest('/conselho', conselho);
export const enviarDadosRecursoConselhoHabilitacao = conselho => service.postRequest('/conselho/habilitacao-recurso', service.buildData(conselho));
export const obterDadosConselho = coConselho => service.getRequest(`/conselho/${coConselho}`);
export const obterConselhos = () => service.getRequest('/conselho');
export const obterConselhosHabilitacao = () => service.getRequest('/conselho/habilitacao');
export const avaliarHabilitacao = conselho => service.postRequest('/conselho/habilitacao', conselho);
export const obterConselhosParcialmenteHabilitados = () => service.getRequest('/conselho/habilitacao/lista-parcial');
export const enviarIndicacaoConselho = payload => service.postRequest('/conselho/indicacao', payload);