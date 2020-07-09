--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cat_reg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cat_reg (
    id integer NOT NULL,
    login character varying(200) NOT NULL,
    pass character varying(32) NOT NULL,
    salt character varying(32) NOT NULL,
    active_hex character varying(32) NOT NULL,
    status smallint NOT NULL
);


ALTER TABLE public.cat_reg OWNER TO postgres;

--
-- Name: cat_reg_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cat_reg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_reg_id_seq OWNER TO postgres;

--
-- Name: cat_reg_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cat_reg_id_seq OWNED BY public.cat_reg.id;


--
-- Name: cat_reg id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_reg ALTER COLUMN id SET DEFAULT nextval('public.cat_reg_id_seq'::regclass);


--
-- Data for Name: cat_reg; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.cat_reg VALUES (1, 'timur', 'e2f5', '', '', 1);
INSERT INTO public.cat_reg VALUES (2, 'user1', '111', '', '', 1);


--
-- Name: cat_reg_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cat_reg_id_seq', 2, true);


--
-- Name: cat_reg cat_reg_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_reg
    ADD CONSTRAINT cat_reg_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

